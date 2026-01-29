<?php

namespace App\Mail\Contact;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionReceived extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct(public ContactSubmission $submission) {}
    public function build()
    {
        $subject = 'New Contact Enquiry: ' . ($this->submission->form->title ?? 'Contact');

        return $this->subject($subject)
            ->view('emails.contact.contact-submission-received');
    }
}
