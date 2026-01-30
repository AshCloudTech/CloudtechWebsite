<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortfolioItem extends Model
{
     protected $fillable = [
        'portfolio_platform_id',
        'title','slug',
        'industry','tags',
        'short_description',
        'website_url','is_live',
        'thumbnail_image','thumb_alt',
        'sort_order','is_published',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_live' => 'boolean',
        'is_published' => 'boolean',
    ];

    public function platform(): BelongsTo
    {
        return $this->belongsTo(PortfolioPlatform::class, 'portfolio_platform_id');
    }
}
