<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
       public function index()
    {
        return view('case-studies');
    }
    public function detail($slug)
    {
        return view('case-study-detail', ['slug' => $slug]);
    }
}
