<?php

namespace App\Mail;

use App\Models\PaymentLink;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentLinkCreated extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public PaymentLink $paymentLink) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your secure Novara Holidays payment link - '.$this->paymentLink->reference,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.payment-link-created',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
