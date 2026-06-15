<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\View\View;

class SupportDashboardController extends Controller
{
    public function index(): View
    {
        $totalPosts = BlogPost::count();
        $publishedPosts = BlogPost::where('is_published', true)->count();
        $draftPosts = $totalPosts - $publishedPosts;
        $recentPosts = BlogPost::latest()->take(5)->get();

        return view('support.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'draftPosts',
            'recentPosts'
        ));
    }
}
