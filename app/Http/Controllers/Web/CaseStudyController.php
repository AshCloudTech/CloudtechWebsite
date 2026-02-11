<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
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

        return view('case-studies', compact('caseStudies', 'industries'));
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
                'testimonials',
                'points' => fn($q) => $q->orderBy('sort_order'),
            ])
            ->firstOrFail();

        $challengePoints = $caseStudy->points->where('section', 'challenge')->values();
        $solutionPoints  = $caseStudy->points->where('section', 'solution')->values();

        return view('case-study-detail', compact('caseStudy', 'challengePoints', 'solutionPoints'));
    }
}
