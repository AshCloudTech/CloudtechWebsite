<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseStudy extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'subtitle',
        'excerpt',
        'industry',
        'industry_tag_color',
        'location',
        'client_name',
        'website',
        'year',
        'duration',
        'card_image',
        'hero_image',
        'hero_title_main',
        'hero_title_em',
        'hero_lead',
        'hero_quote',
        'chart_trend_label',
        'chart_breakdown_label',
        'challenge_title',
        'challenge_body',
        'solution_title',
        'solution_body',
        'features_heading',
        'features_subheading',
        'impact_heading',
        'impact_subheading',
        'testimonial_badge',
        'testimonial_quote',
        'testimonial_author_name',
        'testimonial_author_title',
        'cta_title',
        'cta_btn_text',
        'meta_title',
        'meta_description',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function stats(): HasMany
    {
        return $this->hasMany(CaseStudyStat::class)->orderBy('sort_order');
    }

    public function kpis(): HasMany
    {
        return $this->hasMany(CaseStudyKpi::class)->orderBy('sort_order');
    }

    public function chartTrends(): HasMany
    {
        return $this->hasMany(CaseStudyChartTrend::class)->orderBy('sort_order');
    }

    public function chartBreakdowns(): HasMany
    {
        return $this->hasMany(CaseStudyChartBreakdown::class)->orderBy('sort_order');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(CaseStudyTask::class)->orderBy('sort_order');
    }

    public function points(): HasMany
    {
        return $this->hasMany(CaseStudyPoint::class)->orderBy('sort_order');
    }

    public function features(): HasMany
    {
        return $this->hasMany(CaseStudyFeature::class)->orderBy('sort_order');
    }

    public function impacts(): HasMany
    {
        return $this->hasMany(CaseStudyImpact::class)->orderBy('sort_order');
    }

    public function techStacks(): HasMany
    {
        return $this->hasMany(CaseStudyTechStack::class)->orderBy('sort_order');
    }

    public function challengePoints(): HasMany
    {
        return $this->points()->where('section', 'challenge');
    }

    public function solutionPoints(): HasMany
    {
        return $this->points()->where('section', 'solution');
    }

    public function testimonials(): HasMany
    {
        return $this->hasMany(CaseStudyTestimonial::class)->orderBy('sort_order');
    }
}
