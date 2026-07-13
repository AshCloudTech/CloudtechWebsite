<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BusinessResult;
use App\Models\CaseStudy;
use App\Models\Consultation;
use App\Models\ContactForm;
use App\Models\ContactSubmission;
use App\Models\PortfolioItem;
use App\Models\SmtpMailer;
use Illuminate\View\View;

class SupportDashboardController extends Controller
{
    public function index(): View
    {
        $totalPosts = BlogPost::count();
        $publishedPosts = BlogPost::where('is_published', true)->count();
        $draftPosts = $totalPosts - $publishedPosts;
        $recentPosts = BlogPost::latest()->take(5)->get();

        $newLeads = ContactSubmission::where('status', 'new')->count();
        $totalLeads = ContactSubmission::count();
        $recentLeads = ContactSubmission::with('form')->latest()->take(5)->get();

        $newConsultations = Consultation::where('status', 'new')->count();
        $totalConsultations = Consultation::count();
        $recentConsultations = Consultation::latest()->take(5)->get();

        $stats = [
            'smtp_mailers' => SmtpMailer::count(),
            'contact_forms' => ContactForm::count(),
            'case_studies' => CaseStudy::count(),
            'portfolio_items' => PortfolioItem::count(),
            'business_results' => BusinessResult::count(),
        ];

        return view('support.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'draftPosts',
            'recentPosts',
            'newLeads',
            'totalLeads',
            'recentLeads',
            'newConsultations',
            'totalConsultations',
            'recentConsultations',
            'stats'
        ));
    }
}
