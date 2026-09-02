<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\LocationSeoController;

/*
|--------------------------------------------------------------------------
| Dynamic Location SEO Routes
|--------------------------------------------------------------------------
*/

Route::middleware('web')->group(function () {

    Route::get('/digital-marketing-service-{locationSlug}', [LocationSeoController::class, 'digitalMarketing'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.digital.marketing.location');

    Route::get('/social-media-marketing-service-{locationSlug}', [LocationSeoController::class, 'socialMediaMarketing'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/ppc-advertising-service-{locationSlug}', [LocationSeoController::class, 'ppcAdvertising'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/google-business-profile-service-{locationSlug}', [LocationSeoController::class, 'googleBusinessProfile'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/meta-ads-service-{locationSlug}', [LocationSeoController::class, 'metaAds'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/seo-service-{locationSlug}', [LocationSeoController::class, 'seo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/seo-agency-{locationSlug}', [LocationSeoController::class, 'handleSeoAgencyRequest'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/national-seo-service-{locationSlug}', [LocationSeoController::class, 'nationalSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/international-seo-service-{locationSlug}', [LocationSeoController::class, 'internationalSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/international-seo-{locationSlug}', [LocationSeoController::class, 'international_Seo'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.generic');

    Route::get('/technical-seo-service-{locationSlug}', [LocationSeoController::class, 'technicalSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/content-seo-service-{locationSlug}', [LocationSeoController::class, 'contentSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/image-seo-service-{locationSlug}', [LocationSeoController::class, 'imageSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/local-seo-service-{locationSlug}', [LocationSeoController::class, 'localSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/ecommerce-seo-service-{locationSlug}', [LocationSeoController::class, 'ecommerceSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/ecommerce-seo-agency-{locationSlug}', [LocationSeoController::class, 'ecommerceSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/on-page-seo-service-{locationSlug}', [LocationSeoController::class, 'onPageSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/off-page-seo-service-{locationSlug}', [LocationSeoController::class, 'offPageSeo'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/website-development-service-{locationSlug}', [LocationSeoController::class, 'websiteDevelopment'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/website-development-services-{locationSlug}', [LocationSeoController::class, 'websiteDevelopment'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/woocommerce-agency-in-{locationSlug}', [LocationSeoController::class, 'woocommerce'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/woocommerce-development-services-{locationSlug}', [LocationSeoController::class, 'woocommerce'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/shopify-website-development-service-{locationSlug}', [LocationSeoController::class, 'shopify'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/shopify-development-services-{locationSlug}', [LocationSeoController::class, 'shopify'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/squarespace-website-development-service-{locationSlug}', [LocationSeoController::class, 'squarespace'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/squarespace-development-services-{locationSlug}', [LocationSeoController::class, 'squarespace'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/wordpress-website-development-service-{locationSlug}', [LocationSeoController::class, 'wordpress'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/wordpress-development-services-{locationSlug}', [LocationSeoController::class, 'wordpress'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/wix-website-development-service-{locationSlug}', [LocationSeoController::class, 'wix'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/wix-development-services-{locationSlug}', [LocationSeoController::class, 'wix'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/godaddy-website-development-{locationSlug}', [LocationSeoController::class, 'godaddy'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/godaddy-website-builder-services-{locationSlug}', [LocationSeoController::class, 'godaddy'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/laravel-website-development-service-{locationSlug}', [LocationSeoController::class, 'laravel'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/laravel-development-services-{locationSlug}', [LocationSeoController::class, 'laravel'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/custom-php-website-development-service-{locationSlug}', [LocationSeoController::class, 'customPhp'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/custom-php-development-services-{locationSlug}', [LocationSeoController::class, 'customPhp'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/cloud-health-digital-service-{locationSlug}', [LocationSeoController::class, 'cloudhealth'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/care-home-seo-services-in-{locationSlug}', [LocationSeoController::class, 'cloudcare'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/education-seo-services-in-{locationSlug}', [LocationSeoController::class, 'cloudedu'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/travel-seo-services-in-{locationSlug}', [LocationSeoController::class, 'cloudtravel'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/recruitment-seo-services-in-{locationSlug}', [LocationSeoController::class, 'cloudrecruit'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/public-sector-seo-service-in-{locationSlug}', [LocationSeoController::class, 'cloudpublic'])
        ->where('locationSlug', '[a-z0-9-]+');

    Route::get('/global-seo-services-{locationSlug}', [LocationSeoController::class, 'globalSeoServices'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.global.services');

    Route::get('/international-seo-websites-{locationSlug}', [LocationSeoController::class, 'internationalSeoWebsites'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.websites');

    Route::get('/international-seo-agency-{locationSlug}', [LocationSeoController::class, 'handleInternationalSeoAgencyRequest'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.agency.dispatcher');

    Route::get('/international-seo-services-{locationSlug}', [LocationSeoController::class, 'internationalSeoServicesPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.services.page');

    Route::get('/international-seo-consultant-{locationSlug}', [LocationSeoController::class, 'internationalSeoConsultantPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.consultant.page');

    Route::get('/international-seo-expert-{locationSlug}', [LocationSeoController::class, 'internationalSeoExpertPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.expert.page');

    Route::get('/global-seo-strategy-{locationSlug}', [LocationSeoController::class, 'globalSeoStrategyPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.global.strategy.page');

    Route::get('/international-seo-strategy-{locationSlug}', [LocationSeoController::class, 'internationalSeoStrategyPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.strategy.page');

    Route::get('/seo-for-international-sites-{locationSlug}', [LocationSeoController::class, 'seoForInternationalSitesPage'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.international.sites.page');

    Route::get('/seo-services-{locationSlug}', [LocationSeoController::class, 'seoServices'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.services.page');

    Route::get('/seo-company-{locationSlug}', [LocationSeoController::class, 'seoCompany'])
        ->where('locationSlug', '[a-z0-9-]+')
        ->name('services.seo.company.page');
});