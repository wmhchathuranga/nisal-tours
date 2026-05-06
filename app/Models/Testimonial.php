<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
   use HasFactory;

    protected $fillable = [
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
}
