<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    /**
     * List all blog posts with search & filter.
     */
    public function index(Request $request)
    {
        $query = BlogPost::with('user')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'published') {
                $query->where('is_published', true);
            } elseif ($request->status === 'draft') {
                $query->where('is_published', false);
            }
        }

        $posts = $query->paginate(15)->withQueryString();

        return view('support.blogs.index', compact('posts'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('support.blogs.create');
    }

    /**
     * Store a new blog post.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blog_posts,slug',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'category'         => 'nullable|string|max:100',
            'featured_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_published'     => 'nullable',
        ]);

        $data = [
            'user_id'          => auth()->id(),
            'title'            => $validated['title'],
            'slug'             => $validated['slug'] ?: null, // Model will auto-generate if empty
            'excerpt'          => $validated['excerpt'] ?? null,
            'content'          => $validated['content'],
            'category'         => $validated['category'] ?? null,
            'meta_title'       => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'is_published'     => $request->boolean('is_published'),
            'published_at'     => $request->boolean('is_published') ? now() : null,
        ];

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->uploadFeaturedImage(
                $request->file('featured_image')
            );
        }

        BlogPost::create($data);

        return redirect()
            ->route('support.blogs.index')
            ->with('success', 'Blog post created successfully.');
    }

    /**
     * Show edit form.
     */
    public function edit(BlogPost $blog)
    {
        return view('support.blogs.edit', compact('blog'));
    }

    /**
     * Update an existing blog post.
     */
    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blog_posts,slug,' . $blog->id,
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'category'         => 'nullable|string|max:100',
            'featured_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_published'     => 'nullable',
        ]);

        $data = [
            'title'            => $validated['title'],
            'excerpt'          => $validated['excerpt'] ?? null,
            'content'          => $validated['content'],
            'category'         => $validated['category'] ?? null,
            'meta_title'       => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'is_published'     => $request->boolean('is_published'),
        ];

        // Update slug only if explicitly provided
        if (!empty($validated['slug']) && $validated['slug'] !== $blog->slug) {
            $data['slug'] = Str::slug($validated['slug']);
        }

        // Set published_at when first published
        if ($request->boolean('is_published') && !$blog->published_at) {
            $data['published_at'] = now();
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $this->deleteFeaturedImage($blog->featured_image);
            $data['featured_image'] = $this->uploadFeaturedImage(
                $request->file('featured_image')
            );
        }

        $blog->update($data);

        return redirect()
            ->route('support.blogs.index')
            ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Delete a blog post.
     */
    public function destroy(BlogPost $blog)
    {
        $this->deleteFeaturedImage($blog->featured_image);

        $blog->delete();

        return redirect()
            ->route('support.blogs.index')
            ->with('success', 'Blog post deleted successfully.');
    }

    private function uploadFeaturedImage(UploadedFile $file): string
    {
        $dir = public_path('assets/blog');

        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $ext = strtolower($file->getClientOriginalExtension() ?: $file->extension() ?: 'jpg');
        $fileName = 'blog_' . time() . '_' . uniqid() . '.' . $ext;
        $file->move($dir, $fileName);

        return 'assets/blog/' . $fileName;
    }

    private function deleteFeaturedImage(?string $path): void
    {
        if (blank($path) || Str::startsWith($path, ['http://', 'https://'])) {
            return;
        }

        $relative = ltrim($path, '/');
        $fullPath = public_path($relative);

        if (is_file($fullPath)) {
            @unlink($fullPath);
            return;
        }

        if (str_starts_with($relative, 'storage/')) {
            $diskPath = Str::after($relative, 'storage/');
            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($diskPath)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($diskPath);
            }
        }
    }
}
