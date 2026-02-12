<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\AuditLeadAdminNotification;
use App\Mail\AuditLeadUserConfirmation;
use App\Models\AuditLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
class AuditLeadController extends Controller
{
      public function store(Request $request)
    {
        $data = $request->validate([
            'audit_type'  => ['required','string','max:120'],
            'source_page' => ['nullable','string','max:255'],
            'page_url'    => ['nullable','string','max:500'],

            'name'  => ['required','string','max:120'],
            'email' => ['required','email','max:190'],
            'phone' => ['nullable','string','max:30'],
            'reason'=> ['nullable','string','max:2000'],

            'utm_source'   => ['nullable','string','max:100'],
            'utm_medium'   => ['nullable','string','max:100'],
            'utm_campaign' => ['nullable','string','max:120'],
        ]);

        $lead = AuditLead::create([
            ...$data,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        // Admin notification email (set AUDIT_LEADS_TO in .env)
        $to = config('audit.leads_to', config('mail.from.address'));
        if ($to) {
            Mail::to($to)->send(new AuditLeadAdminNotification($lead));
        }

        // Optional: user confirmation
        if (config('audit.send_user_confirmation', true)) {
            Mail::to($lead->email)->send(new AuditLeadUserConfirmation($lead));
        }

        $message = "Thanks! Your audit request has been received. Our team will contact you soon.";

        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'message' => $message,
            ]);
        }

        return back()->with('success', $message);
    }
}
