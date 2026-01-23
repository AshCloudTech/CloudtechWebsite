<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
      public function cloudhealth()
    {
        return view('web.industries.cloudhealth');
    }

      public function cloudcare()
    {
        return view('web.industries.cloudcare');
    }

      public function cloudedu()
    {
        return view('web.industries.cloudedu');
    }

      public function cloudtravel()
    {
        return view('web.industries.cloudtravel');
    }

      public function cloudrecruit()
    {
        return view('web.industries.cloudrecruit');
    }

      public function cloudpublic()
    {
        return view('web.industries.cloudpublic');
    }
}
