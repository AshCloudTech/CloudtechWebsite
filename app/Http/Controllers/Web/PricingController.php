<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PricingFaq;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::query()
            ->where('is_active', true)
            ->with([
                'prices' => fn($q) => $q->orderBy('sort_order'),
                'features' => fn($q) => $q->where('is_active', true)->orderBy('sort_order'),
            ])
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->get();

        $faqs = PricingFaq::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // Hero can also be moved to DB later; keeping static for now
        return view('pricing', compact('plans', 'faqs'));
    }
}
