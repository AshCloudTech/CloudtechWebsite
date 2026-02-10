<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessResult extends Model
{
    protected $fillable = [
        'business_name',
        'business_location',
        'campaign_duration',
        'metrics',
        'quote',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'metrics' => 'array',
        'is_active' => 'boolean',
    ];
}
