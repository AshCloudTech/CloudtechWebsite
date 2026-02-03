<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;

class HomeController extends Controller
{
    public function index()
    {
        
        $caseStudies = CaseStudy::query()
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        $industries = $caseStudies
            ->pluck('industry')
            ->filter()
            ->unique()
            ->values();
            return view('welcome', compact('caseStudies', 'industries'));
    }

    public function detail(string $slug)
    {
        $caseStudy = CaseStudy::query()
            ->where('is_published', true)
            ->where('slug', $slug)
            ->with([
                'stats',
                'features',
                'impacts',
                'techStacks',
                'points' => fn($q) => $q->orderBy('sort_order'),
            ])
            ->firstOrFail();

        $challengePoints = $caseStudy->points->where('section', 'challenge')->values();
        $solutionPoints  = $caseStudy->points->where('section', 'solution')->values();

        return view('case-study-detail', compact('caseStudy', 'challengePoints', 'solutionPoints'));
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
