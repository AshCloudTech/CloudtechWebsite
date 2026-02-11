<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseStudy extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'excerpt',
        'industry',
        'industry_tag_color',
        'client_name',
        'year',
        'card_image',
        'hero_image',
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
        'meta_title',
        'meta_description',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function stats(): HasMany
    {
        return $this->hasMany(CaseStudyStat::class)->orderBy('sort_order');
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
