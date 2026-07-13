<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\RedirectsToConsole;
use App\Models\PortfolioItem;
use App\Models\PortfolioPlatform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioItemController extends Controller
{
    use RedirectsToConsole;

    public function index(Request $request)
    {
        $q = PortfolioItem::query()->with('platform');

        if ($s = trim((string)$request->get('search', ''))) {
            $q->where(function ($sub) use ($s) {
                $sub->where('title', 'like', "%{$s}%")
                    ->orWhere('slug', 'like', "%{$s}%")
                    ->orWhere('industry', 'like', "%{$s}%");
            });
        }

        if ($platform = $request->get('platform')) {
            $q->whereHas('platform', fn($p) => $p->where('slug', $platform));
        }

        if (($status = $request->get('status')) !== null && $status !== '') {
            $q->where('is_published', $status === 'published');
        }

        $items = $q->orderBy('sort_order')->orderByDesc('id')->paginate(20)->withQueryString();
        $platforms = PortfolioPlatform::orderBy('sort_order')->get();

        return view('admin.portfolio-items.index', compact('items', 'platforms'));
    }

    public function create()
    {
        $item = new PortfolioItem();
        $platforms = PortfolioPlatform::where('is_active', true)->orderBy('sort_order')->get();

        return view('admin.portfolio-items.create', compact('item', 'platforms'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['is_live'] = (bool)$request->get('is_live', false);
        $data['is_published'] = (bool)$request->get('is_published', true);

        // tags: comma or array
        $data['tags'] = $this->normalizeTags($request->input('tags'));

if ($request->hasFile('thumbnail_image')) {
    $data['thumbnail_image'] = $this->storePublicPortfolioImage($request->file('thumbnail_image'));
}


        PortfolioItem::create($data);

        return $this->consoleRedirect('portfolio-items.index', [], 'Portfolio item created.');
    }

    public function edit(PortfolioItem $portfolio_item)
    {
        $item = $portfolio_item;
        $platforms = PortfolioPlatform::where('is_active', true)->orderBy('sort_order')->get();

        return view('admin.portfolio-items.edit', compact('item', 'platforms'));
    }

    public function update(Request $request, PortfolioItem $portfolio_item)
    {
        $item = $portfolio_item;
        $data = $this->validated($request, $item->id);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['is_live'] = (bool)$request->get('is_live', false);
        $data['is_published'] = (bool)$request->get('is_published', false);

        $data['tags'] = $this->normalizeTags($request->input('tags'));

 if ($request->hasFile('thumbnail_image')) {

    // delete old file from public/assets/portfolio
    if (!empty($item->thumbnail_image) && file_exists(public_path($item->thumbnail_image))) {
        @unlink(public_path($item->thumbnail_image));
    }

    $data['thumbnail_image'] = $this->storePublicPortfolioImage($request->file('thumbnail_image'));
}


        $item->update($data);

        return back()->with('success', 'Portfolio item updated.');
    }

    public function destroy(PortfolioItem $portfolio_item)
    {
        if ($portfolio_item->thumbnail_image) {
            Storage::disk('public')->delete($portfolio_item->thumbnail_image);
        }

        $portfolio_item->delete();

        return back()->with('success', 'Portfolio item deleted.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        $uniqueSlug = 'unique:portfolio_items,slug';
        if ($ignoreId) $uniqueSlug .= ',' . $ignoreId;

        return $request->validate([
            'portfolio_platform_id' => ['required', 'exists:portfolio_platforms,id'],
            'title' => ['required', 'string', 'max:140'],
            'slug' => ['nullable', 'string', 'max:160', $uniqueSlug],

            'industry' => ['nullable', 'string', 'max:80'],
            'short_description' => ['nullable', 'string', 'max:255'],

            'website_url' => ['nullable', 'string', 'max:500'],
            'thumb_alt' => ['nullable', 'string', 'max:160'],

            'sort_order' => ['nullable', 'integer', 'min:0'],

            // checkbox handled manually
            'is_live' => ['nullable'],
            'is_published' => ['nullable'],

            // tags handled manually
            'tags' => ['nullable'],
            'thumbnail_image' => ['nullable', 'image', 'max:2048'],
        ]);
    }

    private function normalizeTags($tags): ?array
    {
        if (is_array($tags)) {
            $clean = array_values(array_filter(array_map(fn($t) => trim((string)$t), $tags)));
            return $clean ?: null;
        }

        $tags = trim((string)$tags);
        if ($tags === '') return null;

        $arr = array_map('trim', explode(',', $tags));
        $arr = array_values(array_filter($arr));
        return $arr ?: null;
    }

    private function storePublicPortfolioImage($file): string
    {
        // public/assets/portfolio
        $dir = public_path('assets/portfolio');

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        // safer unique filename
        $ext = strtolower($file->getClientOriginalExtension() ?: 'webp');
        $name = 'pf_' . now()->format('Ymd_His') . '_' . Str::random(8) . '.' . $ext;

        $file->move($dir, $name);

        // store relative path in DB (best practice)
        return 'assets/portfolio/' . $name;
    }
}
