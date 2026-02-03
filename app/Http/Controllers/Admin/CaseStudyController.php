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

        // slug
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['slug'] = $this->uniqueSlug($data['slug']);

        // uploads
        $data = $this->handleUploads($request, $data);

        $caseStudy = CaseStudy::create($data);

        $this->syncChildren($caseStudy, $request);

        return redirect()->route('admin.case-studies.edit', $caseStudy)->with('success', 'Case study created.');
    }

    public function edit(CaseStudy $caseStudy)
    {
        $caseStudy->load(['stats','features','impacts','techStacks','points']);
        return view('admin.case-studies.edit', compact('caseStudy'));
    }

    public function update(Request $request, CaseStudy $caseStudy)
    {
        $data = $this->validated($request, $caseStudy->id);

        // slug
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['slug'] = $this->uniqueSlug($data['slug'], $caseStudy->id);

        $data = $this->handleUploads($request, $data, $caseStudy);

        $caseStudy->update($data);

        $this->syncChildren($caseStudy, $request);

        return back()->with('success', 'Case study updated.');
    }

    public function destroy(CaseStudy $caseStudy)
    {
        // optionally delete files
        if ($caseStudy->card_image) Storage::disk('public')->delete($caseStudy->card_image);
        if ($caseStudy->hero_image) Storage::disk('public')->delete($caseStudy->hero_image);

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

            'card_image' => ['nullable'], // file handled separately
            'hero_image' => ['nullable'],

            'challenge_title' => ['nullable','string','max:120'],
            'challenge_body' => ['nullable','string'],

            'solution_title' => ['nullable','string','max:120'],
            'solution_body' => ['nullable','string'],

            'features_heading' => ['nullable','string','max:120'],
            'features_subheading' => ['nullable','string','max:255'],

            'impact_heading' => ['nullable','string','max:120'],
            'impact_subheading' => ['nullable','string','max:255'],

            'testimonial_badge' => ['nullable','string','max:10'],
            'testimonial_quote' => ['nullable','string'],
            'testimonial_author_name' => ['nullable','string','max:120'],
            'testimonial_author_title' => ['nullable','string','max:180'],

            'meta_title' => ['nullable','string','max:255'],
            'meta_description' => ['nullable','string','max:255'],

            'is_published' => ['nullable','boolean'],
            'sort_order' => ['nullable','integer','min:0'],
        ]);
    }

  private function handleUploads(Request $request, array $data, ?CaseStudy $caseStudy = null): array
{
    // destination: public/assets/case-studies
    $destDir = public_path('assets/case-studies');

    if (!is_dir($destDir)) {
        @mkdir($destDir, 0755, true);
    }

    foreach (['card_image', 'hero_image'] as $field) {
        if ($request->hasFile($field)) {

            // delete old image if exists
            if ($caseStudy?->$field) {
                $oldPath = public_path($caseStudy->$field); // stored as 'assets/case-studies/xxx.webp'
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $file = $request->file($field);

            // safe unique filename
            $ext = strtolower($file->getClientOriginalExtension() ?: 'webp');
            $name = Str::slug($data['title'] ?? 'case-study') . '-' . $field . '-' . time() . '-' . Str::random(6) . '.' . $ext;

            // move to public/assets/case-studies
            $file->move($destDir, $name);

            // store relative path in DB for asset()
            $data[$field] = 'assets/case-studies/' . $name;

        } else {
            unset($data[$field]); // don't null it accidentally
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
        foreach ($stats as $i => $row) {
            if (blank($row['value'] ?? null) && blank($row['label'] ?? null)) continue;
            $caseStudy->stats()->create([
                'icon' => $row['icon'] ?? null,
                'value' => $row['value'] ?? null,
                'label' => $row['label'] ?? null,
                'sort_order' => (int)($row['sort_order'] ?? $i),
            ]);
        }

        // POINTS
        $caseStudy->points()->delete();
        $points = $request->input('points', []);
        foreach ($points as $i => $row) {
            if (blank($row['text'] ?? null) || blank($row['section'] ?? null)) continue;
            $caseStudy->points()->create([
                'section' => $row['section'],
                'icon' => $row['icon'] ?? null,
                'text' => $row['text'],
                'sort_order' => (int)($row['sort_order'] ?? $i),
            ]);
        }

        // FEATURES
        $caseStudy->features()->delete();
        $features = $request->input('features', []);
        foreach ($features as $i => $row) {
            if (blank($row['title'] ?? null) && blank($row['description'] ?? null)) continue;
            $caseStudy->features()->create([
                'icon' => $row['icon'] ?? null,
                'title' => $row['title'] ?? 'Untitled',
                'description' => $row['description'] ?? null,
                'sort_order' => (int)($row['sort_order'] ?? $i),
            ]);
        }

        // IMPACTS
        $caseStudy->impacts()->delete();
        $impacts = $request->input('impacts', []);
        foreach ($impacts as $i => $row) {
            if (blank($row['metric'] ?? null) && blank($row['title'] ?? null) && blank($row['description'] ?? null)) continue;
            $caseStudy->impacts()->create([
                'metric' => $row['metric'] ?? null,
                'title' => $row['title'] ?? null,
                'description' => $row['description'] ?? null,
                'sort_order' => (int)($row['sort_order'] ?? $i),
            ]);
        }

        // TECH
        $caseStudy->techStacks()->delete();
        $tech = $request->input('tech', []);
        foreach ($tech as $i => $row) {
            if (blank($row['name'] ?? null)) continue;
            $caseStudy->techStacks()->create([
                'name' => $row['name'],
                'sort_order' => (int)($row['sort_order'] ?? $i),
            ]);
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
