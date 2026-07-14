<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\RedirectsToConsole;
use App\Models\ContactForm;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    use RedirectsToConsole;

     public function index(Request $request)
    {
        $forms = ContactForm::orderBy('title')->get();
        $q = ContactSubmission::query()->with('form')->latest();

        if ($request->filled('form_id')) {
            $q->where('contact_form_id', $request->integer('form_id'));
        }
        if ($request->filled('status')) {
            $q->where('status', $request->string('status'));
        }
        if ($request->filled('search')) {
            $s = trim((string) $request->input('search'));
            $q->where(function ($sub) use ($s) {
                $sub->where('email','like',"%{$s}%")
                    ->orWhere('name','like',"%{$s}%")
                    ->orWhere('phone','like',"%{$s}%");
            });
        }

        $submissions = $q->paginate(20)->withQueryString();

        return view('admin.leads.index', compact('submissions', 'forms'));
    }

    public function show(ContactSubmission $submission)
    {
        $submission->load('form');
        return view('admin.leads.show', compact('submission'));
    }

    public function updateStatus(Request $request, ContactSubmission $submission)
{
    $data = $request->validate([
        'status' => ['required', 'in:new,processed,spam'],
    ]);

    $submission->update([
        'status' => $data['status'],
    ]);

    return $this->consoleRedirect('leads.index', [], 'Lead status updated.');
}
}
