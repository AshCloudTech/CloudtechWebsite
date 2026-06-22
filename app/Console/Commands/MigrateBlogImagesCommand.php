<?php

namespace App\Console\Commands;

use App\Models\BlogPost;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MigrateBlogImagesCommand extends Command
{
    protected $signature = 'blog:migrate-images';

    protected $description = 'Copy legacy storage/blog images into public/assets/blog and update paths';

    public function handle(): int
    {
        $destDir = public_path('assets/blog');

        if (! is_dir($destDir)) {
            mkdir($destDir, 0755, true);
        }

        $migrated = 0;

        BlogPost::query()
            ->whereNotNull('featured_image')
            ->where('featured_image', 'like', 'storage/blog/%')
            ->each(function (BlogPost $post) use ($destDir, &$migrated) {
                $relative = ltrim($post->featured_image, '/');
                $diskPath = Str::after($relative, 'storage/');

                if (! Storage::disk('public')->exists($diskPath)) {
                    $this->warn("Missing file for post #{$post->id}: {$post->featured_image}");
                    return;
                }

                $ext = pathinfo($diskPath, PATHINFO_EXTENSION) ?: 'jpg';
                $fileName = 'blog_' . $post->id . '_' . basename($diskPath, '.' . $ext) . '.' . $ext;
                $target = $destDir . DIRECTORY_SEPARATOR . $fileName;

                File::copy(Storage::disk('public')->path($diskPath), $target);

                $post->update(['featured_image' => 'assets/blog/' . $fileName]);
                $migrated++;
                $this->line("Migrated post #{$post->id} → assets/blog/{$fileName}");
            });

        $this->info("Done. Migrated {$migrated} image(s).");

        return self::SUCCESS;
    }
}
