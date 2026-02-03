<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Contact\ContactAutoReply;
use App\Mail\Contact\ContactSubmissionReceived;
use App\Models\ContactForm;
use App\Models\ContactSubmission;
use App\Models\SmtpMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function submit(Request $request)
    {
        $request->validate([
            'form_key' => ['required','string','max:120'],
            'source_page' => ['nullable','string','max:255'],

            'name' => ['required','string','max:120'],
            'email' => ['required','email','max:160'],
            'phone' => ['nullable','string','max:40'],
            'subject' => ['nullable','string','max:160'],
            'message' => ['nullable','string','max:5000'],
        ]);

        $key = trim((string) $request->input('form_key'));
        $sourcePage = $request->input('source_page') ?: $request->path();

        // Create the form record if missing (safe default)
        $form = ContactForm::firstOrCreate(
            ['key' => $key],
            [
                'title' => ucwords(str_replace(['-', '_'], ' ', $key)),
                'source_page' => $sourcePage,
                'is_active' => true,
            ]
        );

        if (!$form->is_active) {
            return back()->withErrors(['form_key' => 'This form is disabled.'])->withInput();
        }

        // page-specific fields go into payload automatically
        $known = [
            'form_key','source_page','name','email','phone','subject','message',
            '_token','_method',
        ];
        $payload = collect($request->all())
            ->except($known)
            ->filter(fn($v) => !is_null($v) && $v !== '')
            ->toArray();

        $submission = ContactSubmission::create([
            'contact_form_id' => $form->id,
            'source_page' => $sourcePage,

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),

            'payload' => $payload,

            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 1000),
            'referrer' => (string) $request->headers->get('referer'),

            'utm_source' => $request->input('utm_source'),
            'utm_medium' => $request->input('utm_medium'),
            'utm_campaign' => $request->input('utm_campaign'),
            'utm_term' => $request->input('utm_term'),
            'utm_content' => $request->input('utm_content'),

            'status' => 'new',
        ]);

        // Choose SMTP: form-specific else default
        $smtp = $form->smtp_mailer_id
            ? SmtpMailer::active()->find($form->smtp_mailer_id)
            : SmtpMailer::active()->default()->first();

        // Build mailer (dynamic) only if smtp exists
        if ($smtp) {
            config([
                'mail.mailers.dynamic' => [
                    'transport' => 'smtp',
                    'host' => $smtp->host,
                    'port' => $smtp->port,
                    'encryption' => $smtp->encryption,
                    'username' => $smtp->username,
                    'password' => $smtp->password,
                    'timeout' => $smtp->timeout ?? null,
                ],
                'mail.from.address' => $smtp->from_address ?: config('mail.from.address'),
                'mail.from.name' => $smtp->from_name ?: config('mail.from.name'),
            ]);
        }

        $to = $form->recipient_to ?: config('mail.from.address');

        // Send admin notification
        if ($to) {
            $mailer = $smtp ? Mail::mailer('dynamic') : Mail::mailer(config('mail.default'));
            $mailer->to($to)
                ->when($form->recipient_cc, fn($m) => $m->cc(array_map('trim', explode(',', $form->recipient_cc))))
                ->when($form->recipient_bcc, fn($m) => $m->bcc(array_map('trim', explode(',', $form->recipient_bcc))))
                ->send(new ContactSubmissionReceived($submission));
        }

        // Optional user auto-reply
        if ($form->user_autoreply_enabled && $submission->email) {
            $mailer = $smtp ? Mail::mailer('dynamic') : Mail::mailer(config('mail.default'));
            $mailer->to($submission->email)->send(new ContactAutoReply($submission));
        }

return redirect()->back()
    ->withFragment('contact')
    ->with('success', 'Submitted successfully! We will contact you soon.');
        
    }
}
