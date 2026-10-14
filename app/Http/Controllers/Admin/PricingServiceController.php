<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingService;
use Illuminate\Http\Request;

class PricingServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = PricingService::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $services = $query->orderBy('category')->orderBy('sort_order')->get();

        return view('admin.pricing.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.pricing.services.create', [
            'service' => new PricingService(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateService($request);

        PricingService::create($data);

        return redirect()
            ->route('admin.pricing.services.index')
            ->with('success', 'Pricing service created successfully');
    }

    public function edit(PricingService $service)
    {
        return view('admin.pricing.services.edit', compact('service'));
    }

    public function update(Request $request, PricingService $service)
    {
        $data = $this->validateService($request);

        $service->update($data);

        return redirect()
            ->route('admin.pricing.services.index')
            ->with('success', 'Pricing service updated successfully');
    }

    public function destroy(PricingService $service)
    {
        $service->delete();

        return back()->with('success', 'Pricing service deleted');
    }

    private function validateService(Request $request): array
    {
        $data = $request->validate([
            'category'   => ['required', 'string', 'in:seo,web'],
            'service'    => ['required', 'string', 'max:180'],
            'price'      => ['nullable', 'string', 'max:60'],
            'prefix'     => ['nullable', 'string', 'max:10'],
            'per'        => ['nullable', 'string', 'max:20'],
            'model'      => ['nullable', 'string', 'max:255'],
            'page_url'   => ['nullable', 'string', 'max:255'],
            'page_route' => ['nullable', 'string', 'max:120'],
            'noindex'    => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active'  => ['nullable', 'boolean'],
        ]);

        $data['prefix']     = $data['prefix'] ?? '£';
        $data['noindex']    = $request->boolean('noindex');
        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = (int)($data['sort_order'] ?? 0);

        return $data;
    }
}
