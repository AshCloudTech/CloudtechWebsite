<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PricingFaq;
use App\Models\PricingPlan;
use App\Models\PricingService;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $seoServices = PricingService::query()
            ->where('category', 'seo')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $webServices = PricingService::query()
            ->where('category', 'web')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $usaPlans = PricingPlan::query()
            ->where(function ($q) {
                $q->where('category', 'usa')->orWhereNull('category');
            })
            ->where('is_active', true)
            ->with([
                'prices' => fn($q) => $q->orderBy('sort_order'),
                'features' => fn($q) => $q->where('is_active', true)->orderBy('sort_order'),
            ])
            ->orderBy('sort_order')
            ->get();

        $plans = $usaPlans;

        $faqs = PricingFaq::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pricing', compact('seoServices', 'webServices', 'usaPlans', 'plans', 'faqs'));
    }
}
