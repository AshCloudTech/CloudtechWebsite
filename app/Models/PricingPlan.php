<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PricingPlan extends Model
{
    protected $fillable = [
        'key',
        'category',
        'badge_text',
        'badge_variant',
        'title',
        'subtitle',
        'ideal',
        'currency_symbol',
        'price_amount',
        'price_period',
        'description',
        'is_featured',
        'sort_order',
        'is_active',
        'cta_text',
        'cta_url',
        'cta_variant',
        'btn_class',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
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
