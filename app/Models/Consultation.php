<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consultation extends Model
{
    protected $fillable = [
        'full_name',
        'company_name',
        'phone',
        'email',
        'website_url',
        'services_interested_in',
        'services_other',
        'website_development',
        'website_development_other',
        'brief_description',
        'approximate_budget',
        'hear_about_us',
        'preferred_method',
        'preferred_datetime',
        'additional_notes',
        'status',
        'handled_at',
        'handled_by'
    ];

    protected $casts = [
        'services_interested_in' => 'array',
        'website_development' => 'array',
        'preferred_datetime' => 'datetime',
        'handled_at' => 'datetime',
    ];

    public function remarks(): HasMany
    {
        return $this->hasMany(ConsultationRemark::class)->latest();
    }
}
