<?php

namespace App\Http\Controllers\Web\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteDevController extends Controller
{
       public function wordpress()
    {
        return view('web.services.website-dev.wordpress');
    }

    public function woocommerce()
    {
        return view('web.services.website-dev.woocommerce');
    }

    public function shopify()
    {
        return view('web.services.website-dev.shopify');
    }

    public function squarespace()
    {
        return view('web.services.website-dev.squarespace');
    }
  
    public function wix()
    {
        return view('web.services.website-dev.wix');
    }

    public function godaddy()
    {
        return view('web.services.website-dev.godaddy');
    }

    public function laravel()
    {
        return view('web.services.website-dev.laravel');
    }

    public function customphp()
    {
        return view('web.services.website-dev.customphp');
    }


}
