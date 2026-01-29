<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyBranch extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'code',
        'email',
        'phone',
        'whatsapp',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country_code',
        'latitude',
        'longitude',
        'google_maps_url',
        'is_hq',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_hq' => 'boolean',
        'is_active' => 'boolean',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
