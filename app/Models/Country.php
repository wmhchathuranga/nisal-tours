<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'official_name',
        'code',
        'latitude',
        'longitude',
        'region',
        'subregion',
        'flag',
    ];

    protected $appends = ['flag_url'];

    public function getFlagUrlAttribute()
    {
        if ($this->code) {
            return 'https://flagcdn.com/w40/' . strtolower($this->code) . '.png';
        }
        return null;
    }

    /**
     * Relationships
     */
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    /**
     * Helper: Get map X/Y (for your current static map)
     */
    public function getMapPositionAttribute()
    {
        $x = ($this->longitude + 180) * (100 / 360);
        $y = (90 - $this->latitude) * (100 / 180);

        return [
            'x' => $x,
            'y' => $y,
        ];
    }
}
