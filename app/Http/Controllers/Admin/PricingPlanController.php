<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::orderBy('sort_order')->get();
        return view('admin.pricing.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.plans.create');
    }

    public function store(Request $request)
    {
        //  Save plan
        $plan = PricingPlan::create([
            'key'          => $request->key,
            'title'        => $request->title,
            'badge_text'   => $request->badge_text,
            'badge_variant' => $request->badge_variant,
            'description'  => $request->description,
            'cta_text'     => $request->cta_text,
            'cta_url'      => $request->cta_url,
            'is_featured'  => $request->boolean('is_featured'),
            'is_active'    => $request->boolean('is_active'),
        ]);

        //  Save prices
        foreach ($request->prices ?? [] as $billingKey => $price) {
            if (!empty($price['amount_text'])) {
                $plan->prices()->create([
                    'billing_key' => $billingKey,
                    'amount_text' => $price['amount_text'],
                    'period_text' => $price['period_text'] ?? null,
                ]);
            }
        }


        foreach ($request->features ?? [] as $index => $text) {
            if (!empty($text)) {
                $plan->features()->create([
                    'text' => $text,
                    'sort_order' => $index,
                ]);
            }
        }

        return redirect()
            ->route('admin.pricing.plans.index')
            ->with('success', 'Pricing plan created successfully');
    }
    public function edit(PricingPlan $plan)
    {

        $plan->load(['prices', 'features']);

        return view('admin.pricing.plans.edit', compact('plan'));
    }

    public function update(Request $request, PricingPlan $plan)
    {
        $data = $request->all();
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active']   = $request->boolean('is_active');

        $plan->update($data);

        return back()->with('success', 'Pricing plan updated');
    }

    public function destroy(PricingPlan $plan)
    {
        $plan->delete();

        return back()->with('success', 'Pricing plan deleted');
    }
}
