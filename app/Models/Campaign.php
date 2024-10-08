<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'target_amount',
        'raised_amount',
        'is_active',
        'division', // Include division
    ];

    // Relationship with updates
    public function updates()
    {
        return $this->hasMany(Update::class);
    }

    // Relationship with donations
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}

