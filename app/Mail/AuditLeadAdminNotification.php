<?php

namespace App\Mail;

use App\Models\AuditLead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuditLeadAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public AuditLead $lead) {}

    public function build()
    {
        return $this->subject('New Audit Request: ' . $this->lead->audit_type)
            ->markdown('emails.audit.admin', ['lead' => $this->lead]);
    }
}
