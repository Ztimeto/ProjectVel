<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'header_image',
        'description',
        'details',
        'goal_amount',
        'message',
    ];

    // Define the relationship with updates
    public function updates()
    {
        return $this->hasMany(Update::class);
    }

    // Define the relationship with donations
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
