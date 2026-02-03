<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContactForm extends Model
{
    protected $fillable = [
        'key',
        'title',
        'source_page',
        'recipient_to',
        'recipient_cc',
        'recipient_bcc',
        'user_autoreply_enabled',
        'user_autoreply_subject',
        'user_autoreply_body',
        'smtp_mailer_id',
        'is_active',
    ];

    protected $casts = [
        'user_autoreply_enabled' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function smtpMailer(): BelongsTo
    {
        return $this->belongsTo(SmtpMailer::class, 'smtp_mailer_id');
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(ContactSubmission::class);
    }
}
