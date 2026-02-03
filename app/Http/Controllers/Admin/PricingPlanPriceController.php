<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlanPrice;
use Illuminate\Http\Request;

class PricingPlanPriceController extends Controller
{
    public function store(Request $request)
    {
        PricingPlanPrice::updateOrCreate(
            [
                'pricing_plan_id' => $request->pricing_plan_id,
                'billing_key'     => $request->billing_key, // monthly | one-time
            ],
            [
                'amount_text' => $request->amount_text,
                'period_text' => $request->period_text,
                'sort_order'  => $request->sort_order ?? 0,
            ]
        );

        return back()->with('success', 'Plan price saved');
    }
}
