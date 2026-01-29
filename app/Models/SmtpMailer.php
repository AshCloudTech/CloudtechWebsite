<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmtpMailer extends Model
{
    protected $fillable = [
        'name',
        'host',
        'port',
        'encryption',
        'username',
        'password',
        'from_address',
        'from_name',
        'reply_to_address',
        'timeout',
        'is_default',
        'is_active',
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'is_active' => 'boolean',
        'port' => 'integer',
        'timeout' => 'integer',
        // Laravel supports encrypted cast
        'password' => 'encrypted',
    ];

    public function scopeActive($q)
    {
        return $q->where('is_active', 1);
    }

    public function scopeDefault($q)
    {
        return $q->where('is_default', 1);
    }
}
