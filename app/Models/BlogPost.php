<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'is_published',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    /**
     * Auto-generate a unique slug from the title when creating.
     */
    protected static function booted(): void
    {
        static::creating(function (BlogPost $post) {
            if (empty($post->slug)) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
        });
    }

    /**
     * Generate a unique slug, appending a suffix if needed.
     */
    public static function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $counter = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $counter++;
        }

        return $slug;
    }

    /**
     * Scope: only published posts whose published_at is in the past.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                     ->where('published_at', '<=', now());
    }

    /**
     * The author of this blog post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Public URL for the featured image, or null when missing.
     */
    public function featuredImageUrl(): ?string
    {
        if (blank($this->featured_image)) {
            return null;
        }

        $path = $this->featured_image;

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return $path;
        }

        $relative = ltrim($path, '/');

        if (file_exists(public_path($relative))) {
            return asset($relative);
        }

        if (str_starts_with($relative, 'storage/')) {
            $diskPath = Str::after($relative, 'storage/');
            if (Storage::disk('public')->exists($diskPath)) {
                return asset($relative);
            }
        }

        return null;
    }
}
