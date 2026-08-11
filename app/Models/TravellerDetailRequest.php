<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravellerDetailRequest extends Model
{
    protected $fillable = [
        'created_by', 'reference', 'token_hash', 'access_token', 'expected_travellers',
        'status', 'expires_at', 'leader_name', 'leader_email', 'leader_phone',
        'leader_country', 'emergency_contact_name', 'emergency_contact_phone',
        'submitted_at',
    ];

    protected $hidden = ['access_token', 'token_hash'];

    protected function casts(): array
    {
        return [
            'access_token' => 'encrypted',
            'expected_travellers' => 'integer',
            'expires_at' => 'datetime',
            'submitted_at' => 'datetime',
        ];
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function travellers(): HasMany
    {
        return $this->hasMany(Traveller::class)->orderBy('position');
    }

    public function isAvailable(): bool
    {
        return $this->status === 'pending'
            && (! $this->expires_at || $this->expires_at->isFuture());
    }
}
