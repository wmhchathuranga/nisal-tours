<?php

use App\Models\PaymentLink;
use App\Models\User;
use App\Services\PayHereService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    config()->set('services.payhere', [
        'merchant_id' => '1211149',
        'merchant_secret' => 'sandbox-secret',
        'sandbox' => true,
    ]);
});

function paymentLink(array $overrides = []): PaymentLink
{
    return PaymentLink::create(array_merge([
        'reference' => 'NV-TEST-001',
        'token' => str_repeat('a', 64),
        'title' => 'Seven-day Sri Lanka tour',
        'amount' => '1250.00',
        'currency' => 'USD',
        'status' => 'pending',
        'customer_name' => 'Test Customer',
        'customer_email' => 'customer@example.com',
        'customer_phone' => '+94770000000',
        'customer_address' => '1 Main Street',
        'customer_city' => 'Colombo',
        'customer_country' => 'Sri Lanka',
    ], $overrides));
}

it('generates the checkout hash on the server from the stored total', function () {
    $link = paymentLink();

    $this->get(route('payments.show', $link->token))
        ->assertOk()
        ->assertSee('Seven-day Sri Lanka tour')
        ->assertSee('USD 1,250.00');

    $response = $this->post(route('payments.checkout', $link->token), [
        'amount' => '0.01', // An attacker-supplied amount must be ignored.
    ]);

    $expected = app(PayHereService::class)->checkoutHash(
        '1211149', 'NV-TEST-001', '1250.00', 'USD', 'sandbox-secret'
    );

    $response->assertOk()
        ->assertSee('name="amount" value="1250.00"', false)
        ->assertSee('name="hash" value="'.$expected.'"', false)
        ->assertSee('https://sandbox.payhere.lk/pay/checkout', false)
        ->assertDontSee('name="amount" value="0.01"', false);
});

it('marks a payment paid only after a valid matching notification', function () {
    $link = paymentLink();
    $service = app(PayHereService::class);
    $payload = [
        'merchant_id' => '1211149',
        'order_id' => $link->reference,
        'payment_id' => '320000000001',
        'payhere_amount' => '1250.00',
        'payhere_currency' => 'USD',
        'status_code' => '2',
        'method' => 'VISA',
        'status_message' => 'Successfully completed',
    ];
    $payload['md5sig'] = $service->checkoutHash(
        $payload['merchant_id'], $payload['order_id'], $payload['payhere_amount'],
        $payload['payhere_currency'], 'sandbox-secret'.''
    );

    $this->post(route('payments.notify'), $payload)->assertOk()->assertSee('OK');

    $link->refresh();
    expect($link->status)->toBe('paid')
        ->and($link->paid_at)->not->toBeNull()
        ->and($link->gateway_response['payment_id'])->toBe('320000000001');
});

it('rejects forged signatures and mismatched totals', function () {
    $link = paymentLink();
    $base = [
        'merchant_id' => '1211149',
        'order_id' => $link->reference,
        'payment_id' => '320000000002',
        'payhere_amount' => '1250.00',
        'payhere_currency' => 'USD',
        'status_code' => '2',
        'md5sig' => str_repeat('0', 32),
    ];

    $this->post(route('payments.notify'), $base)->assertBadRequest();
    expect($link->fresh()->status)->toBe('pending');

    $base['payhere_amount'] = '1.00';
    $base['md5sig'] = app(PayHereService::class)->checkoutHash(
        $base['merchant_id'], $base['order_id'], $base['payhere_amount'], 'USD', 'sandbox-secret'
    );
    $this->post(route('payments.notify'), $base)->assertBadRequest();
    expect($link->fresh()->status)->toBe('pending');
});

it('does not downgrade an already paid payment on a delayed callback', function () {
    $link = paymentLink(['status' => 'paid', 'paid_at' => now()]);
    $payload = [
        'merchant_id' => '1211149', 'order_id' => $link->reference,
        'payhere_amount' => '1250.00', 'payhere_currency' => 'USD', 'status_code' => '-2',
    ];
    $payload['md5sig'] = app(PayHereService::class)->checkoutHash(
        $payload['merchant_id'], $payload['order_id'], $payload['payhere_amount'], 'USD', 'sandbox-secret'
    );

    $this->post(route('payments.notify'), $payload)->assertOk();
    expect($link->fresh()->status)->toBe('paid');
});

it('allows only an admin to create the authoritative payment link', function () {
    $this->get(route('admin.payment-links.create'))->assertRedirect(route('login'));

    $admin = User::factory()->create();
    $admin->forceFill(['role' => 'admin'])->save();

    $response = $this->actingAs($admin)->post(route('admin.payment-links.store'), [
        'reference' => 'NV-ADMIN-001',
        'title' => 'Private family tour',
        'description' => 'Final package agreed with the customer.',
        'amount' => '450000.00',
        'currency' => 'LKR',
        'customer_name' => 'Nimal Perera',
        'customer_email' => 'nimal@example.com',
        'customer_phone' => '+94771234567',
        'customer_address' => '10 Lake Road',
        'customer_city' => 'Kandy',
        'customer_country' => 'Sri Lanka',
    ]);

    $response->assertRedirect(route('admin.payment-links.index'));
    $link = PaymentLink::where('reference', 'NV-ADMIN-001')->firstOrFail();
    expect($link->amount)->toBe('450000.00')
        ->and($link->token)->toHaveLength(64)
        ->and($link->status)->toBe('pending');
});
