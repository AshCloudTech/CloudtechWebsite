<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PricingPlan extends Model
{
     protected $fillable = [
        'key','badge_text','badge_variant','title','subtitle','description',
        'is_featured','sort_order','is_active',
        'cta_text','cta_url','cta_variant',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function prices(): HasMany
    {
        return $this->hasMany(PricingPlanPrice::class)->orderBy('sort_order');
    }

    public function features(): HasMany
    {
        return $this->hasMany(PricingPlanFeature::class)->orderBy('sort_order');
    }

    public function priceByBilling(string $billingKey): ?PricingPlanPrice
    {
        return $this->prices->firstWhere('billing_key', $billingKey);
    }
}
