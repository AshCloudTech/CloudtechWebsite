<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingPlanPrice extends Model
{
    protected $fillable = [
        'pricing_plan_id',
        'billing_key',
        'amount_text',
        'period_text',
        'sort_order',
        'currency',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(PricingPlan::class, 'pricing_plan_id');
    }
}
