<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingFaq;
use Illuminate\Http\Request;

class PricingFaqController extends Controller
{
    public function index()
    {
        $faqs = PricingFaq::orderBy('sort_order')->get();
        return view('admin.pricing.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.pricing.faq.create');
    }

    public function store(Request $request)
    {
        PricingFaq::create([
            'question'   => $request->question,
            'answer'     => $request->answer,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => true,
        ]);

        return redirect()
            ->route('admin.pricing.faq.index')
            ->with('success', 'FAQ added');
    }

    public function edit(PricingFaq $faq)
    {
        return view('admin.pricing.faq.edit', compact('faq'));
    }

    public function update(Request $request, PricingFaq $faq)
    {
        $faq->update([
            'question'   => $request->question,
            'answer'     => $request->answer,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('admin.pricing.faq.index')
            ->with('success', 'FAQ updated');
    }

    public function destroy(PricingFaq $faq)
    {
        $faq->delete();

        return back()->with('success', 'FAQ deleted');
    }
}
