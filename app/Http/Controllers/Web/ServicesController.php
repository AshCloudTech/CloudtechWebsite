<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function digitalMarketing()
    {
        return view('web.services.digital-marketing');
    }

    public function uiux()
    {
        // return view('web.services.ui-ux');
        return view('web.services.coming-soon');

    }

    public function webDevelopment()
    {
        return view('web.services.web-development');
    }

    public function branding()
    {
        // return view('web.services.branding');
        return view('web.services.coming-soon');

    }

    public function seo()
    {
        return view('web.services.seo');
    }

    public function productMarketing()
    {
        // return view('web.services.product-marketing');
          return view('web.services.coming-soon');

    }


}
