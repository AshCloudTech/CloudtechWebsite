<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlanFeature;
use Illuminate\Http\Request;

class PricingPlanFeatureController extends Controller
{
    public function store(Request $request)
    {
        PricingPlanFeature::create($request->all());

        return back()->with('success', 'Feature added');
    }

    public function destroy(PricingPlanFeature $feature)
    {
        $feature->delete();

        return back()->with('success', 'Feature removed');
    }
}
