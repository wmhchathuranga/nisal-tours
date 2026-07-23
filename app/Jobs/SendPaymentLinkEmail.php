<?php

namespace App\Jobs;

use App\Mail\PaymentLinkCreated;
use App\Models\PaymentLink;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Throwable;

class SendPaymentLinkEmail implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 30;

    public function __construct(
        public PaymentLink $paymentLink,
        public string $recipient,
    ) {}

    public function handle(): void
    {
        $paymentLink = $this->paymentLink->fresh();

        if (! $paymentLink?->canSendPaymentEmail()) {
            $paymentLink?->forceFill([
                'email_last_error' => 'Payment URL became unavailable before delivery.',
            ])->save();

            return;
        }

        Mail::to($this->recipient)->send(new PaymentLinkCreated($paymentLink));

        $paymentLink->forceFill([
            'email_sent_at' => now(),
            'email_last_error' => null,
        ])->save();
    }

    public function failed(?Throwable $exception): void
    {
        $this->paymentLink->fresh()?->forceFill([
            'email_last_error' => Str::limit(
                $exception?->getMessage() ?? 'The email could not be delivered.',
                500,
            ),
        ])->save();
    }
}
