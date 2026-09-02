<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LocationSeoController extends Controller
{
    /**
     * Dynamically loads either the local layout or agency layout depending on location configuration.
     *
     * @param string $locationSlug
     * @return \Illuminate\Contracts\View\View
     */
    public function handleInternationalSeoAgencyRequest(string $locationSlug)
    {
        // 1. Check if the location exists in config/seo/international-seo.php
        $internationalSeo = config("seo.international-seo.{$locationSlug}");
        if ($internationalSeo) {
            return view('web.services.locations-seo.international-seo-location', [
                'page' => $internationalSeo,
                'content' => $internationalSeo['content'] ?? []
            ]);
        }

        // 2. Check if the location exists in config/seo/international-seo-agency.php
        $internationalSeoAgency = config("seo.international-seo-agency.{$locationSlug}");
        if ($internationalSeoAgency) {
            return view('web.services.locations-seo.international-seo-agency', [
                'content' => $internationalSeoAgency
            ]);
        }

        // 3. Fallback gracefully with a 404
        abort(404);
    }

    /**
     * Dispatcher to handle /seo-agency-{locationSlug} URL for both 'seo' and 'seo-agency' config files.
     *
     * @param string $locationSlug
     * @return \Illuminate\Contracts\View\View
     */
    public function handleSeoAgencyRequest(string $locationSlug)
    {
        // 1. Check if the location exists in config/seo/seo.php
        if (config("seo.seo.{$locationSlug}")) {
            return $this->seo($locationSlug);
        }

        // 2. Check if the location exists in config/seo/seo-agency.php
        if (config("seo.seo-agency.{$locationSlug}")) {
            return $this->SeoAgency($locationSlug);
        }

        // 3. Fallback gracefully with a 404
        abort(404);
    }

    public function digitalMarketing(string $locationSlug)
    {
        $page = config("seo.digital-marketing.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.digital-marketing-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function socialMediaMarketing(string $locationSlug)
    {
        $page = config("seo.social-media-marketing.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.smm-services-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function ppcAdvertising(string $locationSlug)
    {
        $page = config("seo.ppc-advertising.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.ppc-services-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function googleBusinessProfile(string $locationSlug)
    {
        $page = config("seo.google-business-profile.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.google-my-business-optimisation-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function metaAds(string $locationSlug)
    {
        $page = config("seo.meta-ads.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.meta-ads-services-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function seo(string $locationSlug)
    {
        $page = config("seo.seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function nationalSeo(string $locationSlug)
    {
        $page = config("seo.national-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.national-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function internationalSeo(string $locationSlug)
    {
        $page = config("seo.international-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function technicalSeo(string $locationSlug)
    {
        $page = config("seo.technical-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.technical-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function contentSeo(string $locationSlug)
    {
        $page = config("seo.content-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.content-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function imageSeo(string $locationSlug)
    {
        $page = config("seo.image-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.image-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function localSeo(string $locationSlug)
    {
        $page = config("seo.local-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.local-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function ecommerceSeo(string $locationSlug)
    {
        $page = config("seo.ecommerce-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.ecommerce-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function onPageSeo(string $locationSlug)
    {
        $page = config("seo.on-page-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.on-page-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function offPageSeo(string $locationSlug)
    {
        $page = config("seo.off-page-seo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.off-page-seo-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function websiteDevelopment(string $locationSlug)
    {
        $page = config("seo.website-development.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.web-development-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function woocommerce(string $locationSlug)
    {
        $page = config("seo.woocommerce.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.woocommerce-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function shopify(string $locationSlug)
    {
        $page = config("seo.shopify.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.shopify-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function squarespace(string $locationSlug)
    {
        $page = config("seo.squarespace.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.squarespace-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function wordpress(string $locationSlug)
    {
        $page = config("seo.wordpress.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.wordpress-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function wix(string $locationSlug)
    {
        $page = config("seo.wix.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.wix-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function godaddy(string $locationSlug)
    {
        $page = config("seo.godaddy.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.godaddy-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function laravel(string $locationSlug)
    {
        $page = config("seo.laravel.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.laravel-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function customPhp(string $locationSlug)
    {
        $page = config("seo.custom-php.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.custom-php-location', [
            'page' => $page,
            'content' => $page['content'] ?? []
        ]);
    }

    public function cloudhealth(string $locationSlug)
    {
        $page = config("seo.cloudhealth.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudhealth-location', [
            'page' => $page
        ]);
    }

    public function cloudcare(string $locationSlug)
    {
        $page = config("seo.cloudcare.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudcare-location', [
            'page' => $page
        ]);
    }

    public function cloudedu(string $locationSlug)
    {
        $page = config("seo.cloudedu.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudedu-location', [
            'page' => $page
        ]);
    }

    public function cloudtravel(string $locationSlug)
    {
        $page = config("seo.cloudtravel.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudtravel-location', [
            'page' => $page
        ]);
    }

    public function cloudrecruit(string $locationSlug)
    {
        $page = config("seo.cloudrecruit.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudrecruit-location', [
            'page' => $page
        ]);
    }

    public function cloudpublic(string $locationSlug)
    {
        $page = config("seo.cloudpublic.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudpublic-location', [
            'page' => $page
        ]);
    }

    public function internationalSeoCompany(string $locationSlug)
    {
        $page = config("seo.international-seo-company.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-company', [
            'content' => $page
        ]);
    }

    public function globalSeoServices(string $locationSlug)
    {
        $page = config("seo.global-seo-services.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.global-seo-services', [
            'content' => $page
        ]);
    }

    public function internationalSeoWebsites(string $locationSlug)
    {
        $page = config("seo.international-seo-websites.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-websites', [
            'content' => $page
        ]);
    }

    public function internationalSeoAgency(string $locationSlug)
    {
        $page = config("seo.international-seo-agency.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-agency', [
            'content' => $page
        ]);
    }

    public function international_Seo(string $locationSlug)
    {
        $page = config("seo.internationalseo.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo', [
            'content' => $page
        ]);
    }

    public function internationalSeoServicesPage(string $locationSlug)
    {
        $page = config("seo.international-seo-services.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-services', [
            'content' => $page
        ]);
    }

    public function internationalSeoStrategy(string $locationSlug)
    {
        $page = config("seo.international-seo-strategy.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo', [
            'content' => $page
        ]);
    }

    public function internationalSeoConsultantPage(string $locationSlug)
    {
        $page = config("seo.international-seo-consultant.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-consultant', [
            'content' => $page
        ]);
    }

    public function internationalSeoExpertPage(string $locationSlug)
    {
        $page = config("seo.international-seo-expert.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-expert', [
            'content' => $page
        ]);
    }

    public function internationalSeoStrategyPage(string $locationSlug)
    {
        $page = config("seo.international-seo-strategy.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-strategy', [
            'content' => $page
        ]);
    }

    public function seoForInternationalSitesPage(string $locationSlug)
    {
        $page = config("seo.seo-for-international-sites.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-international-sites', [
            'content' => $page
        ]);
    }

    public function SeoServices(string $locationSlug)
    {
        $page = config("seo.seo-services.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-services', [
            'content' => $page
        ]);
    }

    public function SeoAgency(string $locationSlug)
    {
        $page = config("seo.seo-agency.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-agency', [
            'content' => $page
        ]);
    }

    public function SeoCompany(string $locationSlug)
    {
        $page = config("seo.seo-company.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-company', [
            'content' => $page
        ]);
    }

    /**
     * Route traffic dynamically between two different design arrays using a single URL signature.
     *
     * @param string $locationSlug
     * @return \Illuminate\Contracts\View\View
     */
    public function internationalSeoAgencyRouter(string $locationSlug)
    {
        // 1. Check if the context payload exists in config/seo/internationalseo.php
        $internationalseo = config("seo.internationalseo.{$locationSlug}");
        if ($internationalseo) {
            return view('web.services.locations-seo.international-seo', [
                'content' => $internationalseo
            ]);
        }

        // 2. Check if the context payload exists in config/seo/international-seo-agency.php
        $internationalSeoAgency = config("seo.international-seo-agency.{$locationSlug}");
        if ($internationalSeoAgency) {
            return view('web.services.locations-seo.international-seo-agency', [
                'content' => $internationalSeoAgency
            ]);
        }

        // 3. Fallback safely with a 404
        abort(404);
    }

    public function globalSeoStrategyPage(string $locationSlug)
    {
        $page = config("seo.global-seo-strategy.{$locationSlug}");

        abort_if(!$page, 404);

        return view('web.services.locations-seo.global-seo-strategy', [
            'content' => $page
        ]);
    }
}