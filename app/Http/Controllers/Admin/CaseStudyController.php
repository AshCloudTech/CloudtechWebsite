<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function index()
    {
        $items = CaseStudy::query()->orderBy('sort_order')->orderByDesc('id')->paginate(20);
        return view('admin.case-studies.index', compact('items'));
    }

    public function create()
    {
        return view('admin.case-studies.create', [
            'caseStudy' => new CaseStudy(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['slug'] = $this->uniqueSlug($data['slug']);

        $data = $this->handleUploads($request, $data);

        $caseStudy = CaseStudy::create($data);

        $this->syncChildren($caseStudy, $request);

        return redirect()->route('admin.case-studies.edit', $caseStudy)->with('success', 'Case study created.');
    }

    public function edit(CaseStudy $caseStudy)
    {
        $caseStudy->load(['stats','features','impacts','techStacks','points','testimonials']);
        return view('admin.case-studies.edit', compact('caseStudy'));
    }

    public function update(Request $request, CaseStudy $caseStudy)
    {
        $data = $this->validated($request, $caseStudy->id);

        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['slug'] = $this->uniqueSlug($data['slug'], $caseStudy->id);

        $data = $this->handleUploads($request, $data, $caseStudy);

        $caseStudy->update($data);

        $this->syncChildren($caseStudy, $request);

        return back()->with('success', 'Case study updated.');
    }

    public function destroy(CaseStudy $caseStudy)
    {
        if ($caseStudy->card_image) Storage::disk('public')->delete($caseStudy->card_image);
        if ($caseStudy->hero_image) Storage::disk('public')->delete($caseStudy->hero_image);

        // delete testimonial media too
        $caseStudy->load('testimonials');
        foreach ($caseStudy->testimonials as $t) {
            if ($t->author_avatar) Storage::disk('public')->delete($t->author_avatar);
            if ($t->company_logo) Storage::disk('public')->delete($t->company_logo);
        }

        $caseStudy->delete();

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study deleted.');
    }

    private function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required','string','max:180'],
            'slug' => ['nullable','string','max:200', 'unique:case_studies,slug'.($ignoreId ? ',' . $ignoreId : '')],

            'subtitle' => ['nullable','string','max:255'],
            'excerpt' => ['nullable','string','max:255'],
            'industry' => ['nullable','string','max:120'],
            'industry_tag_color' => ['nullable','string','max:30'],
            'client_name' => ['nullable','string','max:150'],
            'year' => ['nullable','string','max:10'],

            'card_image' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:4096'],
            'hero_image' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:4096'],

            'challenge_title' => ['nullable','string','max:120'],
            'challenge_body' => ['nullable','string'],

            'solution_title' => ['nullable','string','max:120'],
            'solution_body' => ['nullable','string'],

            'features_heading' => ['nullable','string','max:120'],
            'features_subheading' => ['nullable','string','max:255'],

            'impact_heading' => ['nullable','string','max:120'],
            'impact_subheading' => ['nullable','string','max:255'],

            // legacy single testimonial fields (optional)
            'testimonial_badge' => ['nullable','string','max:10'],
            'testimonial_quote' => ['nullable','string'],
            'testimonial_author_name' => ['nullable','string','max:120'],
            'testimonial_author_title' => ['nullable','string','max:180'],

            'meta_title' => ['nullable','string','max:255'],
            'meta_description' => ['nullable','string','max:255'],

            'is_published' => ['nullable','boolean'],
            'sort_order' => ['nullable','integer','min:0'],

            // ---------- Dynamic Blocks ----------
            'stats' => ['nullable','array'],
            'stats.*.icon' => ['nullable','string','max:80'],
            'stats.*.value' => ['nullable','string','max:60'],
            'stats.*.label' => ['nullable','string','max:140'],
            'stats.*.sort_order' => ['nullable','integer','min:0'],

            'points' => ['nullable','array'],
            'points.*.section' => ['nullable','in:challenge,solution'],
            'points.*.icon' => ['nullable','string','max:80'],
            'points.*.text' => ['nullable','string','max:255'],
            'points.*.sort_order' => ['nullable','integer','min:0'],

            'features' => ['nullable','array'],
            'features.*.icon' => ['nullable','string','max:80'],
            'features.*.title' => ['nullable','string','max:140'],
            'features.*.description' => ['nullable','string','max:255'],
            'features.*.sort_order' => ['nullable','integer','min:0'],

            'impacts' => ['nullable','array'],
            'impacts.*.metric' => ['nullable','string','max:60'],
            'impacts.*.title' => ['nullable','string','max:140'],
            'impacts.*.description' => ['nullable','string','max:255'],
            'impacts.*.sort_order' => ['nullable','integer','min:0'],

            'tech' => ['nullable','array'],
            'tech.*.name' => ['nullable','string','max:80'],
            'tech.*.sort_order' => ['nullable','integer','min:0'],

            // ---------- Testimonials ----------
            'testimonials' => ['nullable','array'],
            'testimonials.*.badge' => ['nullable','string','max:60'],
            'testimonials.*.quote' => ['nullable','string'],
            'testimonials.*.author_name' => ['nullable','string','max:120'],
            'testimonials.*.author_title' => ['nullable','string','max:180'],
            'testimonials.*.author_company' => ['nullable','string','max:180'],

            'testimonials.*.rating' => ['nullable','integer','min:1','max:5'],
            'testimonials.*.source' => ['nullable','string','max:120'],
            'testimonials.*.source_url' => ['nullable','url','max:255'],

            'testimonials.*.is_featured' => ['nullable','boolean'],
            'testimonials.*.is_published' => ['nullable','boolean'],
            'testimonials.*.sort_order' => ['nullable','integer','min:0'],

            // file inputs (nested)
            'testimonials.*.author_avatar' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:4096'],
            'testimonials.*.company_logo' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:4096'],

            // keep existing images
            'testimonials.*.author_avatar_existing' => ['nullable','string','max:255'],
            'testimonials.*.company_logo_existing' => ['nullable','string','max:255'],
        ]);
    }

    private function handleUploads(Request $request, array $data, ?CaseStudy $caseStudy = null): array
    {
        $destDir = public_path('assets/case-studies');

        if (!is_dir($destDir)) {
            @mkdir($destDir, 0755, true);
        }

        foreach (['card_image', 'hero_image'] as $field) {
            if ($request->hasFile($field)) {

                if ($caseStudy?->$field) {
                    $oldPath = public_path($caseStudy->$field);
                    if (file_exists($oldPath)) @unlink($oldPath);
                }

                $file = $request->file($field);
                $ext = strtolower($file->getClientOriginalExtension() ?: 'webp');
                $name = Str::slug($data['title'] ?? 'case-study') . '-' . $field . '-' . time() . '-' . Str::random(6) . '.' . $ext;

                $file->move($destDir, $name);
                $data[$field] = 'assets/case-studies/' . $name;

            } else {
                unset($data[$field]);
            }
        }

        $data['is_published'] = (bool)($data['is_published'] ?? false);
        $data['sort_order'] = (int)($data['sort_order'] ?? 0);

        return $data;
    }

    private function syncChildren(CaseStudy $caseStudy, Request $request): void
    {
        // STATS
        $caseStudy->stats()->delete();
        $stats = $request->input('stats', []);
        if (is_array($stats)) {
            foreach ($stats as $i => $row) {
                if (blank($row['value'] ?? null) && blank($row['label'] ?? null)) continue;

                $caseStudy->stats()->create([
                    'icon' => $row['icon'] ?? null,
                    'value' => $row['value'] ?? null,
                    'label' => $row['label'] ?? null,
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }

        // POINTS
        $caseStudy->points()->delete();
        $points = $request->input('points', []);
        if (is_array($points)) {
            foreach ($points as $i => $row) {
                if (blank($row['text'] ?? null) || blank($row['section'] ?? null)) continue;

                $caseStudy->points()->create([
                    'section' => $row['section'],
                    'icon' => $row['icon'] ?? null,
                    'text' => $row['text'],
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }

        // FEATURES
        $caseStudy->features()->delete();
        $features = $request->input('features', []);
        if (is_array($features)) {
            foreach ($features as $i => $row) {
                if (blank($row['title'] ?? null) && blank($row['description'] ?? null)) continue;

                $caseStudy->features()->create([
                    'icon' => $row['icon'] ?? null,
                    'title' => $row['title'] ?? 'Untitled',
                    'description' => $row['description'] ?? null,
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }

        // IMPACTS
        $caseStudy->impacts()->delete();
        $impacts = $request->input('impacts', []);
        if (is_array($impacts)) {
            foreach ($impacts as $i => $row) {
                if (blank($row['metric'] ?? null) && blank($row['title'] ?? null) && blank($row['description'] ?? null)) continue;

                $caseStudy->impacts()->create([
                    'metric' => $row['metric'] ?? null,
                    'title' => $row['title'] ?? null,
                    'description' => $row['description'] ?? null,
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }

        // TECH
        $caseStudy->techStacks()->delete();
        $tech = $request->input('tech', []);
        if (is_array($tech)) {
            foreach ($tech as $i => $row) {
                if (blank($row['name'] ?? null)) continue;

                $caseStudy->techStacks()->create([
                    'name' => $row['name'],
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }

        // TESTIMONIALS (with nested uploads)
        $caseStudy->load('testimonials');
        foreach ($caseStudy->testimonials as $old) {
            if ($old->author_avatar) Storage::disk('public')->delete($old->author_avatar);
            if ($old->company_logo) Storage::disk('public')->delete($old->company_logo);
        }
        $caseStudy->testimonials()->delete();

        $testimonials = $request->input('testimonials', []);
        if (is_array($testimonials)) {

            $destDir = public_path('assets/case-studies/testimonials');
            if (!is_dir($destDir)) @mkdir($destDir, 0755, true);

            foreach ($testimonials as $i => $row) {
                $quote = trim((string)($row['quote'] ?? ''));

                // if empty row → skip
                if ($quote === '' && blank($row['author_name'] ?? null) && blank($row['author_company'] ?? null)) {
                    continue;
                }

                // avatar upload
                $avatarPath = $row['author_avatar_existing'] ?? null;
                if ($request->hasFile("testimonials.$i.author_avatar")) {
                    $file = $request->file("testimonials.$i.author_avatar");
                    $ext = strtolower($file->getClientOriginalExtension() ?: 'webp');
                    $name = 't-avatar-' . ($caseStudy->id) . '-' . time() . '-' . Str::random(6) . '.' . $ext;
                    $file->move($destDir, $name);
                    $avatarPath = 'assets/case-studies/testimonials/' . $name;
                }

                // company logo upload
                $logoPath = $row['company_logo_existing'] ?? null;
                if ($request->hasFile("testimonials.$i.company_logo")) {
                    $file = $request->file("testimonials.$i.company_logo");
                    $ext = strtolower($file->getClientOriginalExtension() ?: 'webp');
                    $name = 't-logo-' . ($caseStudy->id) . '-' . time() . '-' . Str::random(6) . '.' . $ext;
                    $file->move($destDir, $name);
                    $logoPath = 'assets/case-studies/testimonials/' . $name;
                }

                $caseStudy->testimonials()->create([
                    'badge' => $row['badge'] ?? null,
                    'quote' => $quote ?: '—',
                    'author_name' => $row['author_name'] ?? null,
                    'author_title' => $row['author_title'] ?? null,
                    'author_company' => $row['author_company'] ?? null,
                    'author_avatar' => $avatarPath,
                    'company_logo' => $logoPath,
                    'rating' => isset($row['rating']) && $row['rating'] !== '' ? (int)$row['rating'] : null,
                    'source' => $row['source'] ?? null,
                    'source_url' => $row['source_url'] ?? null,
                    'is_featured' => (bool)($row['is_featured'] ?? false),
                    'is_published' => (bool)($row['is_published'] ?? true),
                    'sort_order' => (int)($row['sort_order'] ?? $i),
                ]);
            }
        }
    }

    private function uniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug);
        $candidate = $base;
        $i = 1;

        while (CaseStudy::where('slug', $candidate)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $candidate = $base . '-' . $i++;
        }

        return $candidate;
    }
}