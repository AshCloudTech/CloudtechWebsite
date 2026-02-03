<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

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

        return view('welcome', compact('caseStudies'));
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
