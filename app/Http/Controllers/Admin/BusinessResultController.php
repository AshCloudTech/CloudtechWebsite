<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\RedirectsToConsole;
use App\Models\BusinessResult;
use Illuminate\Http\Request;

class BusinessResultController extends Controller
{
    use RedirectsToConsole;

    /**
     * List all result cards
     */
    public function index()
    {
        $results = BusinessResult::orderBy('sort_order')->get();

        return view('admin.business-results.index', compact('results'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.business-results.create');
    }

    /**
     * Store new result card
     */
    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'business_location' => 'required|string|max:255',
            'campaign_duration' => 'required|string|max:255',
            'quote' => 'required|string',
            'metrics' => 'required|array|min:1',
            'metrics.*.label' => 'required|string|max:255',
            'metrics.*.value' => 'required|string|max:255',
        ]);

        BusinessResult::create([
            'business_name' => $request->business_name,
            'business_location' => $request->business_location,
            'campaign_duration' => $request->campaign_duration,
            'quote' => $request->quote,
            'metrics' => array_values($request->metrics), // clean index
            'is_active' => $request->boolean('is_active'),
            'sort_order' => BusinessResult::max('sort_order') + 1,
        ]);

        return $this->consoleRedirect('business-results.index', [], 'Business result added successfully.');
    }

    /**
     * Show edit form
     */
    public function edit(BusinessResult $businessResult)
    {
        return view('admin.business-results.edit', compact('businessResult'));
    }

    /**
     * Update result card
     */
    public function update(Request $request, BusinessResult $businessResult)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'business_location' => 'required|string|max:255',
            'campaign_duration' => 'required|string|max:255',
            'quote' => 'required|string',
            'metrics' => 'required|array|min:1',
            'metrics.*.label' => 'required|string|max:255',
            'metrics.*.value' => 'required|string|max:255',
        ]);

        $businessResult->update([
            'business_name' => $request->business_name,
            'business_location' => $request->business_location,
            'campaign_duration' => $request->campaign_duration,
            'quote' => $request->quote,
            'metrics' => array_values($request->metrics),
            'is_active' => $request->boolean('is_active'),
        ]);

        return $this->consoleRedirect('business-results.index', [], 'Business result updated successfully.');
    }

    /**
     * Delete result card
     */
    public function destroy(BusinessResult $businessResult)
    {
        $businessResult->delete();

        return $this->consoleRedirect('business-results.index', [], 'Business result deleted successfully.');
    }
}
