<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioPlatform;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PortfolioPlatformController extends Controller
{
     public function index(Request $request)
    {
        $q = PortfolioPlatform::query();

        if ($s = trim((string)$request->get('search', ''))) {
            $q->where('name', 'like', "%{$s}%")->orWhere('slug', 'like', "%{$s}%");
        }

        $items = $q->orderBy('sort_order')->paginate(20)->withQueryString();

        return view('admin.portfolio-platforms.index', compact('items'));
    }

    public function create()
    {
        $platform = new PortfolioPlatform();
        return view('admin.portfolio-platforms.create', compact('platform'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:80'],
            'slug' => ['nullable','string','max:80','unique:portfolio_platforms,slug'],
            'badge_color' => ['nullable','string','max:30'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['name']);
        $data['is_active'] = (bool)($request->get('is_active', true));

        PortfolioPlatform::create($data);

        return redirect()->route('admin.portfolio-platforms.index')->with('success', 'Platform created.');
    }

    public function edit(PortfolioPlatform $portfolio_platform)
    {
        $platform = $portfolio_platform;
        return view('admin.portfolio-platforms.edit', compact('platform'));
    }

    public function update(Request $request, PortfolioPlatform $portfolio_platform)
    {
        $platform = $portfolio_platform;

        $data = $request->validate([
            'name' => ['required','string','max:80'],
            'slug' => ['nullable','string','max:80',"unique:portfolio_platforms,slug,{$platform->id}"],
            'badge_color' => ['nullable','string','max:30'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = $data['slug'] ?: Str::slug($data['name']);
        $data['is_active'] = (bool)$request->get('is_active', false);

        $platform->update($data);

        return back()->with('success', 'Platform updated.');
    }

    public function destroy(PortfolioPlatform $portfolio_platform)
    {
        $portfolio_platform->delete();
        return back()->with('success', 'Platform deleted.');
    }
}
