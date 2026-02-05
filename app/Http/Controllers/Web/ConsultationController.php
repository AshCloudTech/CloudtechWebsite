<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation; 

class ConsultationController extends Controller
{
   public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'               => 'required|string|max:255',
            'company_name'            => 'required|string|max:255',
            'phone'                   => 'required|string|max:20',
            'email'                   => 'required|email|max:255',
            'website_url'             => 'nullable|string|max:255',

            'services_interested_in'  => 'required|array',
            'services_other'          => 'nullable|string|max:255',

            'website_development'     => 'required|array',
            'website_development_other'=> 'nullable|string|max:255',

            'brief_description'       => 'nullable|string',
            'approximate_budget'      => 'required|string',
            'hear_about_us'           => 'nullable|string|max:255',

            'preferred_method'        => 'required|string',
            'preferred_datetime'      => 'required|date|after_or_equal:now',

            'additional_notes'        => 'nullable|string',
        ]);

        Consultation::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Your consultation request has been submitted successfully. We’ll contact you shortly!');
    }

}
