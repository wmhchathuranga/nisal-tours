<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentLink extends Model
{
    protected $fillable = [
        'reference', 'token', 'customer_name', 'customer_email', 'customer_phone',
        'customer_address', 'customer_city', 'customer_country',
        'title', 'description', 'amount', 'currency', 'status', 'expires_at',
        'paid_at', 'gateway_response', 'email_queued_at', 'email_sent_at',
        'email_send_attempts', 'email_last_recipient', 'email_last_error',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'expires_at' => 'datetime',
            'paid_at' => 'datetime',
            'email_queued_at' => 'datetime',
            'email_sent_at' => 'datetime',
            'email_send_attempts' => 'integer',
            'gateway_response' => 'array',
        ];
    }

    public function isPayable(): bool
    {
        return $this->status === 'pending'
            && (! $this->expires_at || $this->expires_at->isFuture());
    }

    public function canSendPaymentEmail(): bool
    {
        return $this->isPayable() && filled($this->customer_email);
    }

    public function hasCompleteCustomerDetails(): bool
    {
        return collect([
            $this->customer_name, $this->customer_email, $this->customer_phone,
            $this->customer_address, $this->customer_city, $this->customer_country,
        ])->every(fn ($value) => filled($value));
    }
}
