<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CaseStudyKpi extends Model
{
    protected $fillable = [
        'case_study_id',
        'label',
        'value',
        'formatted',
        'sub',
        'delta',
        'sort_order',
    ];

    public function caseStudy(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }
}
