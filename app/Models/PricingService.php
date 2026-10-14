<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingService extends Model
{
    protected $fillable = [
        'category',
        'service',
        'price',
        'prefix',
        'per',
        'model',
        'page_url',
        'page_route',
        'noindex',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'noindex' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getResolvedPageUrlAttribute(): string
    {
        if (!empty($this->page_route) && \Illuminate\Support\Facades\Route::has($this->page_route)) {
            return route($this->page_route);
        }

        if (!empty($this->page_url)) {
            return $this->page_url;
        }

        return '#';
    }
}
