<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'title',
        'content',
        'date',
    ];

    // Define the relationship with campaign
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
