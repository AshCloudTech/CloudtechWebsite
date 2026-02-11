<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseStudyTestimonial extends Model
{
    protected $fillable = [
        'case_study_id',
        'badge',
        'quote',
        'author_name',
        'author_title',
        'author_company',
        'author_avatar',
        'company_logo',
        'rating',
        'source',
        'source_url',
        'is_featured',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'rating' => 'integer',
        'sort_order' => 'integer',
    ];

    public function caseStudy(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }

    /** Scope for front-end usage */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
