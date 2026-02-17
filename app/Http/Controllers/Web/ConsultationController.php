<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation; 

class ConsultationController extends Controller
{
   public function store(Request $request)
    {
        $data = $request->validate([
            // Step 1
            'full_name' => ['required','string','max:255'],
            'email'     => ['required','email','max:255'],
            'phone'     => ['required','string','max:50'],
            'company_name' => ['nullable','string','max:255'],
            'website_url'  => ['nullable','string','max:255'],

            // Step 2
            'project_type' => ['required','string','max:50'],
            'service_needed' => ['required','string','max:50'],
            'industry' => ['nullable','string','max:255'],
            'project_description' => ['required','string'],
            'budget_range' => ['required','string','max:50'],
            'timeline' => ['required','string','max:50'],

            // Step 3
            'specific_requirements' => ['nullable','string'],
            'reference_projects' => ['nullable','string','max:255'],
            'hear_about_us' => ['nullable','string','max:50'],
            'project_urgency' => ['nullable','string','max:50'],

            // old fields (keep nullable)
            'services_interested_in' => ['nullable','array'],
            'services_interested_in.*' => ['string','max:50'],
            'services_other' => ['nullable','string','max:255'],

            'website_development' => ['nullable','array'],
            'website_development.*' => ['string','max:60'],
            'website_development_other' => ['nullable','string','max:255'],

            'brief_description' => ['nullable','string'],
            'approximate_budget' => ['nullable','string','max:50'],
            'preferred_method' => ['nullable','string','max:50'],
            'preferred_datetime' => ['nullable','date'],
            'additional_notes' => ['nullable','string'],
        ]);

        Consultation::create($data);

        return back()->with('success', 'Thanks! Your consultation request has been submitted.');
    }

}
