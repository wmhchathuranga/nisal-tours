<?php

namespace App\Mail;

use App\Models\Testimonial;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewTestimonialSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Testimonial $testimonial) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New testimonial awaiting review - Novara Holidays',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-testimonial-submitted',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
