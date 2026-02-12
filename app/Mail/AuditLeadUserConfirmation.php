<?php

namespace App\Mail;

use App\Models\AuditLead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuditLeadUserConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public AuditLead $lead) {}

    public function build()
    {
        return $this->subject('We received your audit request')
            ->markdown('emails.audit.user', ['lead' => $this->lead]);
    }
}
