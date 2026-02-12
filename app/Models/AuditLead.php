<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLead extends Model
{
    protected $fillable = [
        'audit_type',
        'source_page',
        'page_url',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'name',
        'email',
        'phone',
        'reason',
        'status',
        'assigned_to',
        'contacted_at',
        'admin_notes',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'contacted_at' => 'datetime',
    ];

    public const STATUSES = [
        'new',
        'contacted',
        'in_progress',
        'qualified',
        'not_reachable',
        'closed',
    ];

    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
