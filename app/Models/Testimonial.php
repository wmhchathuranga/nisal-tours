<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'full_name',
        'country',
        'code',
        'phone_number',
        'rating',
        'experience',
        'profile_picture',
        'top_pos',
        'left_pos',
        'is_approved',
    ];

    protected function casts(): array
    {
        return [
            'is_approved' => 'boolean',
            'rating' => 'integer',
        ];
    }

    public function user()
    {
        // return $this->belongsTo(User::class, 'user_id');
        return $this->belongsTo(User::class, 'full_name', 'name');
    }
}
