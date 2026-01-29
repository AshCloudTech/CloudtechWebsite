<?php

namespace App\Mail\Contact;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAutoReply extends Mailable
{
    use Queueable, SerializesModels;

      public function __construct(public ContactSubmission $submission) {}

    public function build()
    {
        $form = $this->submission->form;

        return $this->subject($form->user_autoreply_subject ?: 'We received your enquiry')
            ->view('emails.contact.contact-auto-reply');
    }
}
