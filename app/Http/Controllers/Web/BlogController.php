<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page with published posts.
     */
    public function index(Request $request)
    {
        $query = BlogPost::published()
            ->with('user')
            ->latest('published_at');

        // Category filter
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $posts = $query->paginate(12)->withQueryString();

        // Get distinct categories for filter
        $categories = BlogPost::published()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category')
            ->sort()
            ->values();

        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Display a single blog post.
     */
    public function show(string $slug)
    {
        $post = BlogPost::published()
            ->where('slug', $slug)
            ->with('user')
            ->firstOrFail();

        // Get related posts (same category, excluding current)
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->when($post->category, function ($q) use ($post) {
                $q->where('category', $post->category);
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
