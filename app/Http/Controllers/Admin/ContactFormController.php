<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\RedirectsToConsole;
use App\Models\ContactForm;
use App\Models\SmtpMailer;
use Illuminate\Http\Request;
class ContactFormController extends Controller
{
    use RedirectsToConsole;

     public function index()
    {
        $forms = ContactForm::orderBy('title')->get();
        return view('admin.settings.contact-forms.index', compact('forms'));
    }

    public function create()
    {
        $mailers = SmtpMailer::active()->orderByDesc('is_default')->get();
        return view('admin.settings.contact-forms.create', compact('mailers'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        ContactForm::create($data);

        return $this->consoleRedirect('settings.contact-forms.index', [], 'Contact form created.');
    }

    public function edit(ContactForm $contactForm)
    {
        $mailers = SmtpMailer::active()->orderByDesc('is_default')->get();
        return view('admin.settings.contact-forms.edit', compact('contactForm','mailers'));
    }

    public function update(Request $request, ContactForm $contactForm)
    {
        $data = $this->validated($request, true);
        $contactForm->update($data);

        return $this->consoleRedirect('settings.contact-forms.index', [], 'Contact form updated.');
    }

    private function validated(Request $request, bool $isUpdate=false): array
    {
        return $request->validate([
            'key' => [$isUpdate ? 'required' : 'required','string','max:120'],
            'title' => ['required','string','max:160'],
            'source_page' => ['nullable','string','max:255'],

            'recipient_to' => ['nullable','string','max:500'],
            'recipient_cc' => ['nullable','string','max:500'],
            'recipient_bcc' => ['nullable','string','max:500'],

            'user_autoreply_enabled' => ['nullable','boolean'],
            'user_autoreply_subject' => ['nullable','string','max:200'],
            'user_autoreply_body' => ['nullable','string','max:8000'],

            'smtp_mailer_id' => ['nullable','exists:smtp_mailers,id'],
            'is_active' => ['nullable','boolean'],
        ]);
    }
}
