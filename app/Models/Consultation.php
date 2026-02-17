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

        // NEW wizard fields
        'project_type',
        'service_needed',
        'industry',
        'project_description',
        'budget_range',
        'timeline',
        'specific_requirements',
        'reference_projects',
        'project_urgency',
        'hear_about_us',

        // OLD fields (keep for backward compatibility)
        'services_interested_in',
        'services_other',
        'website_development',
        'website_development_other',
        'brief_description',
        'approximate_budget',
        'preferred_method',
        'preferred_datetime',
        'additional_notes',

        // admin management
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
