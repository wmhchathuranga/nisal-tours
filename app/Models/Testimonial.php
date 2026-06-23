<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user()
    {
        // return $this->belongsTo(User::class, 'user_id'); 
        return $this->belongsTo(User::class, 'full_name', 'name');
    }
}
