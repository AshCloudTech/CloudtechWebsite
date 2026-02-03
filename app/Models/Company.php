<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = [
        'legal_name',
        'brand_name',
        'slug',
        'tagline',
        'about',
        'is_active',
        'primary_email',
        'support_email',
        'sales_email',
        'primary_phone',
        'secondary_phone',
        'whatsapp',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country_code',
        'timezone',
        'latitude',
        'longitude',
        'google_maps_url',
        'google_place_id',
        'logo_light_path',
        'logo_dark_path',
        'favicon_path',
        'og_image_path',
        'company_seal_path',
        'signature_path',
        'registration_no',
        'tax_no',
        'founded_year',
        'working_hours_json',
        'meta_json',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'working_hours_json' => 'array',
        'meta_json' => 'array',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
    ];

    public function branches(): HasMany
    {
        return $this->hasMany(CompanyBranch::class)->orderBy('sort_order');
    }

    public function socialLinks(): HasMany
    {
        return $this->hasMany(CompanySocialLink::class)->orderBy('sort_order');
    }
}
