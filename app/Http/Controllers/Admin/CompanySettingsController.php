<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanySettingsController extends Controller
{
   public function edit()
    {
        $company = Company::first() ?? Company::create([
            'brand_name' => 'CloudTech',
            'slug' => 'cloudtech',
            'is_active' => true,
        ]);

        $company->load(['branches', 'socialLinks']);

        return view('admin.settings.company', compact('company'));
    }

    public function update(Request $request)
    {
        $company = Company::firstOrFail();

        $data = $request->validate([
            'legal_name' => ['nullable','string','max:180'],
            'brand_name' => ['required','string','max:180'],
            'slug' => ['required','string','max:120'],
            'tagline' => ['nullable','string','max:255'],
            'about' => ['nullable','string','max:8000'],
            'is_active' => ['nullable','boolean'],

            'primary_email' => ['nullable','email','max:160'],
            'support_email' => ['nullable','email','max:160'],
            'sales_email' => ['nullable','email','max:160'],

            'primary_phone' => ['nullable','string','max:40'],
            'secondary_phone' => ['nullable','string','max:40'],
            'whatsapp' => ['nullable','string','max:40'],

            'address_line1' => ['nullable','string','max:255'],
            'address_line2' => ['nullable','string','max:255'],
            'city' => ['nullable','string','max:120'],
            'state' => ['nullable','string','max:120'],
            'postal_code' => ['nullable','string','max:30'],
            'country_code' => ['nullable','string','max:2'],
            'timezone' => ['nullable','string','max:80'],

            'latitude' => ['nullable','numeric'],
            'longitude' => ['nullable','numeric'],
            'google_maps_url' => ['nullable','string','max:500'],
            'google_place_id' => ['nullable','string','max:255'],

            'logo_light' => ['nullable','image','max:2048'],
            'logo_dark'  => ['nullable','image','max:2048'],
            'favicon'    => ['nullable','image','max:1024'],
            'og_image'   => ['nullable','image','max:3072'],
        ]);

        // Checkbox safety (unchecked won't be sent)
        $data['is_active'] = $request->boolean('is_active');

        // Upload files to public/company
        $uploads = [
            'logo_light' => 'logo_light_path',
            'logo_dark'  => 'logo_dark_path',
            'favicon'    => 'favicon_path',
            'og_image'   => 'og_image_path',
        ];

        foreach ($uploads as $input => $column) {
            if ($request->hasFile($input)) {
                $data[$column] = $this->uploadToPublicCompany(
                    $request->file($input),
                    $input,
                    $company->{$column} // old path for delete
                );
            }
        }

        $company->update($data);

        return back()->with('success', 'Company settings updated.');
    }

    private function uploadToPublicCompany($file, string $prefix, ?string $oldPath = null): string
    {
        $dir = public_path('company');

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        // Generate unique filename
        $ext = strtolower($file->getClientOriginalExtension() ?: $file->extension() ?: 'png');
        $fileName = $prefix . '_' . time() . '_' . uniqid() . '.' . $ext;

        // Move
        $file->move($dir, $fileName);

        // Delete old file if it exists under public/company
        if (!empty($oldPath) && str_starts_with($oldPath, 'company/')) {
            $oldFullPath = public_path($oldPath);
            if (is_file($oldFullPath)) {
                @unlink($oldFullPath);
            }
        }

        // Save relative path in DB
        return 'company/' . $fileName;
    }
}
