<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyImpact extends Model
{
    protected $fillable = ['case_study_id','metric','title','description','sort_order'];
}
