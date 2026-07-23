<?php

use App\Jobs\SendPaymentLinkEmail;
use App\Mail\PaymentLinkCreated;
use App\Models\PaymentLink;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;

function emailPaymentLink(array $overrides = []): PaymentLink
{
    return PaymentLink::create(array_merge([
        'reference' => 'NV-EMAIL-001',
        'token' => str_repeat('e', 64),
        'customer_name' => 'Nimal Perera',
        'customer_email' => 'nimal@example.com',
        'customer_phone' => '+94771234567',
        'customer_address' => '10 Lake Road',
        'customer_city' => 'Kandy',
        'customer_country' => 'Sri Lanka',
        'title' => 'Private family tour',
        'description' => 'Accommodation, transport and agreed excursions.',
        'amount' => '450000.00',
        'currency' => 'LKR',
        'status' => 'pending',
        'expires_at' => now()->addDays(3),
    ], $overrides));
}

function paymentEmailAdmin(): User
{
    $admin = User::factory()->create();
    $admin->forceFill(['role' => 'admin'])->save();

    return $admin;
}

it('lets an admin create a payment URL and queue the branded email', function () {
    Queue::fake();

    $this->actingAs(paymentEmailAdmin())->post(route('admin.payment-links.store'), [
        'reference' => 'NV-EMAIL-CREATE',
        'title' => 'Seven-day Sri Lanka tour',
        'description' => 'Hotels, transport and excursions.',
        'amount' => '250000.00',
        'currency' => 'LKR',
        'expires_at' => now()->addDays(3)->format('Y-m-d\TH:i'),
        'customer_name' => 'Test Customer',
        'customer_email' => 'customer@example.com',
        'customer_phone' => '+94770000000',
        'customer_address' => '1 Main Street',
        'customer_city' => 'Colombo',
        'customer_country' => 'Sri Lanka',
        'submission_action' => 'create_and_send',
    ])->assertRedirect(route('admin.payment-links.index'));

    $link = PaymentLink::where('reference', 'NV-EMAIL-CREATE')->firstOrFail();
    expect($link->email_queued_at)->not->toBeNull()
        ->and($link->email_send_attempts)->toBe(1)
        ->and($link->email_last_recipient)->toBe('customer@example.com');

    Queue::assertPushed(
        SendPaymentLinkEmail::class,
        fn (SendPaymentLinkEmail $job) => $job->paymentLink->is($link)
            && $job->recipient === 'customer@example.com'
    );
});

it('sends the branded email and records successful delivery', function () {
    Mail::fake();
    $link = emailPaymentLink();

    (new SendPaymentLinkEmail($link, $link->customer_email))->handle();

    Mail::assertSent(PaymentLinkCreated::class, function (PaymentLinkCreated $mail) use ($link) {
        return $mail->hasTo($link->customer_email)
            && $mail->paymentLink->is($link);
    });

    expect($link->fresh()->email_sent_at)->not->toBeNull();
});

it('does not email paid cancelled or expired payment URLs', function (string $status, ?string $expiry) {
    Queue::fake();
    $link = emailPaymentLink([
        'reference' => 'NV-BLOCKED-'.strtoupper($status).'-'.($expiry ? 'EXPIRED' : 'CURRENT'),
        'token' => str_pad($status.($expiry ?? ''), 64, 'x'),
        'status' => $status,
        'expires_at' => $expiry ? now()->subMinute() : now()->addDay(),
    ]);

    $this->actingAs(paymentEmailAdmin())
        ->post(route('admin.payment-links.email', $link))
        ->assertSessionHas('error');

    Queue::assertNothingPushed();
})->with([
    ['paid', null],
    ['cancelled', null],
    ['pending', 'expired'],
]);

it('renders the authoritative payment details in the email', function () {
    $link = emailPaymentLink();
    $html = (new PaymentLinkCreated($link))->render();

    expect($html)
        ->toContain('LKR 450,000.00')
        ->toContain('NV-EMAIL-001')
        ->toContain(route('payments.show', $link->token))
        ->not->toContain('PAYHERE_MERCHANT_SECRET');
});

it('throttles repeated payment email requests', function () {
    Queue::fake();
    $link = emailPaymentLink(['reference' => 'NV-EMAIL-THROTTLE', 'token' => str_repeat('t', 64)]);
    $this->actingAs(paymentEmailAdmin());

    for ($attempt = 1; $attempt <= 3; $attempt++) {
        $this->post(route('admin.payment-links.email', $link))->assertRedirect();
    }

    $this->post(route('admin.payment-links.email', $link))->assertTooManyRequests();
    Queue::assertPushed(SendPaymentLinkEmail::class, 3);
});
