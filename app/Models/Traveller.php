<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Traveller extends Model
{
    protected $fillable = [
        'position', 'full_name', 'age', 'nationality', 'dietary_requirements',
        'accessibility_requirements', 'medical_notes',
    ];

    protected function casts(): array
    {
        return [
            'age' => 'integer',
            'dietary_requirements' => 'encrypted',
            'accessibility_requirements' => 'encrypted',
            'medical_notes' => 'encrypted',
        ];
    }

    public function detailRequest(): BelongsTo
    {
        return $this->belongsTo(TravellerDetailRequest::class, 'traveller_detail_request_id');
    }
}
