<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index(Request $request)
    {
        $query = PricingPlan::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $plans = $query->orderBy('sort_order')->orderByDesc('is_featured')->get();
        return view('admin.pricing.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.plans.create', [
            'plan' => new PricingPlan(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatePlan($request);

        $plan = PricingPlan::create($data);

        // Save multi-tier prices if provided
        foreach ($request->prices ?? [] as $billingKey => $price) {
            if (!empty($price['amount_text'])) {
                $plan->prices()->create([
                    'billing_key' => $billingKey,
                    'currency'    => $price['currency'] ?? '£',
                    'amount_text' => $price['amount_text'],
                    'period_text' => $price['period_text'] ?? null,
                ]);
            }
        }

        // Save features
        $this->syncFeatures($plan, $request);

        return redirect()
            ->route('admin.pricing.plans.index')
            ->with('success', 'Pricing plan created successfully');
    }

    public function edit(PricingPlan $plan)
    {
        $plan->load(['prices', 'features']);
        return view('admin.pricing.plans.edit', compact('plan'));
    }

    public function update(Request $request, PricingPlan $plan)
    {
        $data = $this->validatePlan($request, $plan->id);

        $plan->update($data);

        if ($request->has('features_list')) {
            $this->syncFeatures($plan, $request);
        }

        return back()->with('success', 'Pricing plan updated');
    }

    public function destroy(PricingPlan $plan)
    {
        $plan->delete();
        return back()->with('success', 'Pricing plan deleted');
    }

    private function validatePlan(Request $request, ?int $ignoreId = null): array
    {
        $data = $request->validate([
            'key'             => ['required', 'string', 'max:100', 'unique:pricing_plans,key' . ($ignoreId ? ',' . $ignoreId : '')],
            'category'        => ['nullable', 'string', 'max:50'],
            'title'           => ['required', 'string', 'max:180'],
            'subtitle'        => ['nullable', 'string', 'max:255'],
            'ideal'           => ['nullable', 'string', 'max:180'],
            'currency_symbol' => ['nullable', 'string', 'max:10'],
            'price_amount'    => ['nullable', 'string', 'max:40'],
            'price_period'    => ['nullable', 'string', 'max:20'],
            'badge_text'      => ['nullable', 'string', 'max:100'],
            'badge_variant'   => ['nullable', 'string', 'max:50'],
            'description'     => ['nullable', 'string'],
            'cta_text'        => ['nullable', 'string', 'max:100'],
            'cta_url'         => ['nullable', 'string', 'max:255'],
            'cta_variant'     => ['nullable', 'string', 'max:50'],
            'btn_class'       => ['nullable', 'string', 'max:100'],
            'sort_order'      => ['nullable', 'integer', 'min:0'],
            'is_featured'     => ['nullable', 'boolean'],
            'is_active'       => ['nullable', 'boolean'],
        ]);

        $data['category']        = $data['category'] ?? 'usa';
        $data['currency_symbol'] = $data['currency_symbol'] ?? '$';
        $data['price_period']    = $data['price_period'] ?? '/mo';
        $data['is_featured']     = $request->boolean('is_featured');
        $data['is_active']       = $request->boolean('is_active');
        $data['sort_order']      = (int)($data['sort_order'] ?? 0);

        return $data;
    }

    private function syncFeatures(PricingPlan $plan, Request $request): void
    {
        if ($request->has('features_list')) {
            $lines = explode("\n", (string)$request->input('features_list'));
            $plan->features()->delete();
            $order = 1;
            foreach ($lines as $line) {
                $text = trim($line);
                if ($text !== '') {
                    $plan->features()->create([
                        'text' => $text,
                        'sort_order' => $order++,
                        'is_active' => true,
                    ]);
                }
            }
        } elseif ($request->has('features') && is_array($request->input('features'))) {
            $plan->features()->delete();
            foreach ($request->input('features') as $index => $text) {
                if (!empty(trim((string)$text))) {
                    $plan->features()->create([
                        'text' => trim($text),
                        'sort_order' => $index + 1,
                        'is_active' => true,
                    ]);
                }
            }
        }
    }
}
