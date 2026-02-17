<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\Company;
use Illuminate\Http\Request;

use App\Models\PricingPlan;

class HomeController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::query()
            ->where('is_published', true)
            ->with([
                'impacts' => fn($q) => $q->orderBy('sort_order')->limit(3),
                'techStacks' => fn($q) => $q->orderBy('sort_order')->limit(6),
            ])
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->limit(4)
            ->get();

        $featuredPlans = PricingPlan::with(['prices', 'features'])
            ->where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

                $company = Company::query()
        ->where('is_active', true)
        ->with(['branches' => function ($q) {
            $q->where('is_active', true)->orderBy('sort_order');
        }])
        ->first();

    // Collect unique ISO2 country codes (must match SVG path ids)
    $countryCodes = $company?->branches
        ->pluck('country_code')
        ->filter()
        ->map(fn($c) => strtoupper(trim($c)))
        ->unique()
        ->values()
        ->all();

        return view('welcome', compact('caseStudies', 'featuredPlans', 'company', 'countryCodes'));
    }

    public function careers()
    {
        return view('careers');
    }
    public function careerDetail($slug)
    {
        return view('career-detail', ['slug' => $slug]);
    }
    public function termsOfService()
    {
        return view('terms-of-service');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
}
