<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function cloudhealth()
    {
        return view('web.services.cloudhealth');
    }

      public function cloudcare()
    {
        return view('web.services.cloudcare');
    }

      public function cloudedu()
    {
        return view('web.services.cloudedu');
    }

      public function cloudtravel()
    {
        return view('web.services.cloudtravel');
    }

      public function cloudrecruit()
    {
        return view('web.services.cloudrecruit');
    }

      public function cloudpublic()
    {
        return view('web.services.cloudpublic');
    }
}
