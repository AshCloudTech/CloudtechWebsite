<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyFeature extends Model
{
    protected $fillable = ['case_study_id','icon','title','description','sort_order'];
}
