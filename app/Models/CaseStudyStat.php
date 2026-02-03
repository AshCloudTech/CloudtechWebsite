<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyStat extends Model
{
    protected $fillable = ['case_study_id','icon','value','label','sort_order'];
}
