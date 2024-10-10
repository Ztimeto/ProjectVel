<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'donor_name',
        'amount',
        'is_anonymous',
        'division',
    ];

    // Define the relationship with campaign
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
