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
      'full_name' => ['required','string','max:255'],
      'company_name' => ['required','string','max:255'],
      'phone' => ['required','string','max:50'],
      'email' => ['required','email','max:255'],
      'website_url' => ['nullable','string','max:255'],

      'services_interested_in' => ['nullable','array'],
      'services_interested_in.*' => ['string','max:50'],
      'services_other' => ['nullable','string','max:255'],

      'website_development' => ['nullable','array'],
      'website_development.*' => ['string','max:60'],
      'website_development_other' => ['nullable','string','max:255'],

      'brief_description' => ['nullable','string'],
      'approximate_budget' => ['required','string','max:50'],

      'hear_about_us' => ['nullable','string','max:255'],
      'preferred_method' => ['required','in:phone_call,zoom,google_meet,whatsapp'],
      'preferred_datetime' => ['required','date'],

      'additional_notes' => ['nullable','string'],
    ]);

    // normalize “none” (optional but recommended)
    if (!empty($data['services_interested_in']) && in_array('none', $data['services_interested_in'], true)) {
      $data['services_interested_in'] = ['none'];
      $data['services_other'] = null;
    }
    if (!empty($data['website_development']) && in_array('none', $data['website_development'], true)) {
      $data['website_development'] = ['none'];
      $data['website_development_other'] = null;
    }

    Consultation::create($data);

    return back()->with('success', 'Thanks! Your consultation request has been submitted.');
  }

}
