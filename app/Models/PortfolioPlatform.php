<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PortfolioPlatform extends Model
{
        protected $fillable = [
        'name','slug','badge_color','sort_order','is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(PortfolioItem::class, 'portfolio_platform_id');
    }
}
