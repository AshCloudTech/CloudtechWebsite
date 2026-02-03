<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyPoint extends Model
{
    protected $fillable = ['case_study_id','section','icon','text','sort_order'];
}
