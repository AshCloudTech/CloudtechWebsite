<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmtpMailer;
use Illuminate\Http\Request;

class SmtpMailerController extends Controller
{
    public function index()
    {
        $mailers = SmtpMailer::orderByDesc('is_default')->orderByDesc('is_active')->orderBy('name')->get();
        return view('admin.settings.smtp.index', compact('mailers'));
    }

    public function create()
    {
        return view('admin.settings.smtp.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $this->validated($request);

        // checkbox safety
        $data['is_active']  = $request->boolean('is_active');
        $data['is_default'] = $request->boolean('is_default');

        if (!empty($data['is_default'])) {
            SmtpMailer::query()->update(['is_default' => false]);
        }

        SmtpMailer::create($data);

        return redirect()->route('admin.settings.smtp.index')->with('success', 'SMTP mailer created.');
    }

    public function edit(SmtpMailer $smtp)
    {
        return view('admin.settings.smtp.edit', compact('smtp'));
    }

    public function update(Request $request, SmtpMailer $smtp)
    {
        $data = $this->validated($request, true);

        // checkbox safety (unchecked -> false)
        $data['is_active']  = $request->boolean('is_active');
        $data['is_default'] = $request->boolean('is_default');

        if (!empty($data['is_default'])) {
            SmtpMailer::query()->update(['is_default' => false]);
        }

        // If password is empty on edit, don't overwrite
        if (!filled($request->input('password'))) {
            unset($data['password']);
        }

        $smtp->update($data);

        return redirect()->route('admin.settings.smtp.index')->with('success', 'SMTP mailer updated.');
    }

    private function validated(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:120'],

            'host' => ['nullable', 'string', 'max:255'],
            'port' => ['nullable', 'integer', 'min:1', 'max:65535'],
            'encryption' => ['nullable', 'in:tls,ssl'],

            'username' => ['nullable', 'string', 'max:255'],
            'password' => [$isUpdate ? 'nullable' : 'required', 'string', 'max:255'],

            'from_address' => ['nullable', 'email', 'max:160'],
            'from_name' => ['nullable', 'string', 'max:160'],
            'reply_to_address' => ['nullable', 'email', 'max:160'],
            'timeout' => ['nullable', 'integer', 'min:1', 'max:120'],

            'is_default' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
        ]);
    }

    public function show(SmtpMailer $smtp)
    {
        return view('admin.settings.smtp.show', compact('smtp'));
    }

    public function destroy(SmtpMailer $smtp)
    {
        if ($smtp->is_default) {
            return back()->with('error', 'You cannot delete the default SMTP mailer. Set another as default first.');
        }

        $smtp->delete();

        return redirect()->route('admin.settings.smtp.index')->with('success', 'SMTP mailer deleted.');
    }
}
