<?php

namespace App\Http\Controllers\Web\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalMarkController extends Controller
{
    public function nationalseo()
    {
        return view('web.services.digital-marketing.national-seo');
    }

    public function internationalseo()
    {
        return view('web.services.digital-marketing.international-seo');
    }

    public function tecnicalseo()
    {
        return view('web.services.digital-marketing.technical-seo');
    }

    public function contentseo()
    {
        return view('web.services.digital-marketing.content-seo');
    }

    public function googleMyBusinessOptimisation()
    {
        return view('web.services.digital-marketing.google-my-business-optimisation');
    }

    public function imageSeo()
    {
        return view('web.services.digital-marketing.image-seo');
    }

    public function localSeo()
    {
        return view('web.services.digital-marketing.local-seo');
    }

    public function ecommerceSeo()
    {
        return view('web.services.digital-marketing.ecommerce-seo');
    }

    public function onPageSeo()
    {
        return view('web.services.digital-marketing.on-page-seo');
    }

    public function offPageSeo()
    {
        return view('web.services.digital-marketing.off-page-seo');
    }

    public function metaAdsServices()
    {
        return view('web.services.digital-marketing.meta-ads-services');
    }

    public function ppcServices()
    {
        return view('web.services.digital-marketing.ppc-services');
    }

    public function smmServices()
    {
        return view('web.services.digital-marketing.smm-services');
    }
}
