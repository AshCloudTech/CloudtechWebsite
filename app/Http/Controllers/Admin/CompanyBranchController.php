<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyBranch;
use Illuminate\Http\Request;

class CompanyBranchController extends Controller
{
    private function company(): Company
    {
        return Company::firstOrCreate(
            ['slug' => 'cloudtech'],
            ['brand_name' => 'CloudTech', 'is_active' => true]
        );
    }

    public function index()
    {
        $company = $this->company();
        $branches = CompanyBranch::where('company_id', $company->id)
            ->orderByDesc('is_hq')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('admin.settings.branches.index', compact('company', 'branches'));
    }

    public function create()
    {
        $company = $this->company();
        return view('admin.settings.branches.create', compact('company'));
    }

    public function store(Request $request)
    {
        $company = $this->company();
        $data = $this->validateData($request);

        $data['company_id'] = $company->id;

        // Only one HQ branch (optional rule)
        if (!empty($data['is_hq'])) {
            CompanyBranch::where('company_id', $company->id)->update(['is_hq' => false]);
        }

        CompanyBranch::create($data);

        return redirect()->route('admin.settings.branches.index')
            ->with('success', 'Branch created.');
    }

    public function edit(CompanyBranch $branch)
    {
        $company = $this->company();

        // Safety: prevent editing branches from other companies
        abort_if($branch->company_id !== $company->id, 403);

        return view('admin.settings.branches.edit', compact('company', 'branch'));
    }

    public function update(Request $request, CompanyBranch $branch)
    {
        $company = $this->company();
        abort_if($branch->company_id !== $company->id, 403);

        $data = $this->validateData($request);

        if (!empty($data['is_hq'])) {
            CompanyBranch::where('company_id', $company->id)->where('id', '!=', $branch->id)->update(['is_hq' => false]);
        }

        $branch->update($data);

        return redirect()->route('admin.settings.branches.index')
            ->with('success', 'Branch updated.');
    }

    private function validateData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:160'],
            'code' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:40'],
            'whatsapp' => ['nullable', 'string', 'max:40'],

            'address_line1' => ['nullable', 'string', 'max:255'],
            'address_line2' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:120'],
            'state' => ['nullable', 'string', 'max:120'],
            'postal_code' => ['nullable', 'string', 'max:30'],
            'country_code' => ['nullable', 'string', 'max:2'],

            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
            'google_maps_url' => ['nullable', 'string', 'max:500'],

            'is_hq' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
        ]);
    }
}
