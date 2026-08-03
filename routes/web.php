<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CaseStudyController;
use App\Http\Controllers\Web\CloudDigitalController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AuditLeadAdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\CaseStudyController as AdminCaseStudyController;
use App\Http\Controllers\Admin\CompanyBranchController;
use App\Http\Controllers\Admin\CompanySettingsController;
use App\Http\Controllers\Admin\ConsultationAdminController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\ContactSubmissionController;
use App\Http\Controllers\Admin\ImpersonationController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioPlatformController;
use App\Http\Controllers\Admin\SmtpMailerController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\IndustryController;
use App\Http\Controllers\Web\PricingController;
use App\Http\Controllers\Web\Service\DigitalMarkController;
use App\Http\Controllers\Web\Service\WebsiteDevController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\PricingPlanPriceController;
use App\Http\Controllers\Admin\PricingPlanFeatureController;
use App\Http\Controllers\Admin\PricingFaqController;
use App\Http\Controllers\Web\ConsultationController;
use App\Http\Controllers\Admin\BusinessResultController;
use App\Http\Controllers\Web\AuditLeadController;
use App\Http\Controllers\Web\LocationSeoController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Support\SupportDashboardController;
use App\Http\Controllers\Support\BlogPostController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us');

Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case.studies');
Route::get('/case-studies/{slug}', [CaseStudyController::class, 'detail'])->name('case.studies.detail');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::post('/contact-us/submit', [ContactUsController::class, 'submit'])->name('contact.us.submit');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/cloud-digital-solutions', [CloudDigitalController::class, 'cloudDigital'])->name('cloud.digital.solutions');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/careers/{slug}', [HomeController::class, 'careerDetail'])->name('careers.detail');

Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms.of.service');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');
Route::post('/audit-leads', [AuditLeadController::class, 'store'])->name('audit-leads.store');

// Blog public routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

/*
|--------------------------------------------------------------------------
| SEO PRIMARY ROUTES
|--------------------------------------------------------------------------
*/

// Main service pages
Route::get('/digital-marketing-service-uk', [ServicesController::class, 'digitalMarketing'])
    ->name('services.digital.marketing');

Route::get('/website-development-service-uk', [ServicesController::class, 'webDevelopment'])
    ->name('services.web.development');

Route::get('/seo-service-uk', [ServicesController::class, 'seo'])
    ->name('services.seo');

// Keep these if they are real service pages in your site
Route::get('/ui-ux-service-uk', [ServicesController::class, 'uiux'])
    ->name('services.uiux');

Route::get('/branding-service-uk', [ServicesController::class, 'branding'])
    ->name('services.branding');

Route::get('/product-marketing-service-uk', [ServicesController::class, 'productMarketing'])
    ->name('services.product.marketing');


// Digital marketing child pages
Route::get('/google-business-profile-service-uk', [DigitalMarkController::class, 'googleMyBusinessOptimisation'])
    ->name('services.digi-marketing.google-my-business-optimisation');

Route::get('/meta-ads-service-uk', [DigitalMarkController::class, 'metaAdsServices'])
    ->name('services.digi-marketing.meta-ads-services');

Route::get('/ppc-advertising-service-uk', [DigitalMarkController::class, 'ppcServices'])
    ->name('services.digi-marketing.ppc-services');

Route::get('/social-media-marketing-service-uk', [DigitalMarkController::class, 'smmServices'])
    ->name('services.digi-marketing.smm-services');


// SEO child pages
Route::get('/national-seo-service-uk', [DigitalMarkController::class, 'nationalseo'])
    ->name('services.seo.national-seo');

Route::get('/international-seo-service-uk', [DigitalMarkController::class, 'internationalseo'])
    ->name('services.seo.international-seo');
Route::get('/global-seo-services-uk', [DigitalMarkController::class, 'globalseo'])
    ->name('services.seo.global-seo');
    Route::get('/international-seo-company-uk', [DigitalMarkController::class, 'internationalseocompany'])
    ->name('services.seo.international-seo-company');

Route::get('/international-seo-websites-uk', [DigitalMarkController::class, 'internationalseowebsites'])
    ->name('services.seo.international-seo-websites');

Route::get('/international-seo-agency-uk', [DigitalMarkController::class, 'internationalseoagency'])
    ->name('services.seo.international-seo-agency');

Route::get('/international-seo-services-uk', [DigitalMarkController::class, 'internationalseoservices'])
    ->name('services.seo.international-seo-services');

Route::get('/international-seo-uk', [DigitalMarkController::class, 'internationalseouk'])
    ->name('services.seo.international-seo-uk');

Route::get('/international-seo-consultant-uk', [DigitalMarkController::class, 'internationalseoconsultant'])
    ->name('services.seo.international-seo-consultant');

Route::get('/international-seo-expert-uk', [DigitalMarkController::class, 'internationalseoexpert'])
    ->name('services.seo.international-seo-expert');

Route::get('/global-seo-strategy-uk', [DigitalMarkController::class, 'globalseostrategy'])
    ->name('services.seo.global-seo-strategy');

Route::get('/international-seo-strategy-uk', [DigitalMarkController::class, 'internationalseostrategy'])
    ->name('services.seo.international-seo-strategy');

Route::get('/seo-international-sites-uk', [DigitalMarkController::class, 'seointernationalsites'])
    ->name('services.seo.seo-international-sites');

Route::get('/technical-seo-service-uk', [DigitalMarkController::class, 'tecnicalseo'])
    ->name('services.seo.technical-seo');

Route::get('/content-seo-service-uk', [DigitalMarkController::class, 'contentseo'])
    ->name('services.seo.content-seo');

Route::get('/image-seo-service-uk', [DigitalMarkController::class, 'imageSeo'])
    ->name('services.seo.image-seo');

Route::get('/local-seo-service-uk', [DigitalMarkController::class, 'localSeo'])
    ->name('services.seo.local-seo');

Route::get('/ecommerce-seo-service-uk', [DigitalMarkController::class, 'ecommerceSeo'])
    ->name('services.seo.ecommerce-seo');

Route::get('/on-page-seo-service-uk', [DigitalMarkController::class, 'onPageSeo'])
    ->name('services.seo.on-page-seo');

Route::get('/off-page-seo-service-uk', [DigitalMarkController::class, 'offPageSeo'])
    ->name('services.seo.off-page-seo');


// Website development child pages
Route::get('/wordpress-website-development-service-uk', [WebsiteDevController::class, 'wordpress'])
    ->name('services.website-development.wordpress');

Route::get('/shopify-website-development-service-uk', [WebsiteDevController::class, 'shopify'])
    ->name('services.website-development.shopify');

// Your SEO doc maps WooCommerce under wordpress URL naming.
// If you truly need a separate WooCommerce page, better give it its own slug.
Route::get('/woocommerce-website-development-service-uk', [WebsiteDevController::class, 'woocommerce'])
    ->name('services.website-development.woocommerce');

Route::get('/squarespace-website-development-service-uk', [WebsiteDevController::class, 'squarespace'])
    ->name('services.website-development.squarespace');

Route::get('/wix-website-development-service-uk', [WebsiteDevController::class, 'wix'])
    ->name('services.website-development.wix');

Route::get('/godaddy-website-development-uk', [WebsiteDevController::class, 'godaddy'])
    ->name('services.website-development.godaddy');

Route::get('/laravel-website-development-service-uk', [WebsiteDevController::class, 'laravel'])
    ->name('services.website-development.laravel');

Route::get('/custom-php-website-development-service-uk', [WebsiteDevController::class, 'customphp'])
    ->name('services.website-development.custom-php');


// Industry pages
Route::get('/cloud-health-digital-service-uk', [IndustryController::class, 'cloudhealth'])
    ->name('industries.cloudhealth');

Route::get('/cloud-care-digital-service-uk', [IndustryController::class, 'cloudcare'])
    ->name('industries.cloudcare');

Route::get('/cloud-education-digital-service-uk', [IndustryController::class, 'cloudedu'])
    ->name('industries.cloudedu');

// Recommended corrected slug: travel, not traval
Route::get('/cloud-travel-digital-service-uk', [IndustryController::class, 'cloudtravel'])
    ->name('industries.cloudtravel');

Route::get('/cloud-recruitment-digital-service-uk', [IndustryController::class, 'cloudrecruit'])
    ->name('industries.cloudrecruit');

Route::get('/cloud-public-digital-service-uk', [IndustryController::class, 'cloudpublic'])
    ->name('industries.cloudpublic');





/*
|--------------------------------------------------------------------------
| Dynamic Location SEO Routes
|--------------------------------------------------------------------------
*/

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
Route::get('/seo-agency-{locationSlug}', [LocationSeoController::class, 'seo'])
    ->where('locationSlug', '[a-z0-9-]+');
Route::get('/national-seo-service-{locationSlug}', [LocationSeoController::class, 'nationalSeo'])
    ->where('locationSlug', '[a-z0-9-]+');
// Route::get('/international-seo-agency-{locationSlug}', [LocationSeoController::class, 'internationalSeo'])
//     ->where('locationSlug', '[a-z0-9-]+');
Route::get('/international-seo-service-{locationSlug}', [LocationSeoController::class, 'internationalSeo'])
    ->where('locationSlug', '[a-z0-9-]+');
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
Route::get('/international-seo-company-{locationSlug}', [LocationSeoController::class, 'internationalSeoCompany'])
    ->where('locationSlug', '[a-z0-9-]+')
    ->name('services.seo.international.company');
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
Route::get('/seo-agency-{locationSlug}', [LocationSeoController::class, 'seoAgency'])
    ->where('locationSlug', '[a-z0-9-]+')
    ->name('services.seo.agency.page');
Route::get('/seo-company-{locationSlug}', [LocationSeoController::class, 'seoCompany'])
    ->where('locationSlug', '[a-z0-9-]+')
    ->name('services.seo.company.page');
/*
|--------------------------------------------------------------------------
| 301 REDIRECTS FROM OLD URLS
|--------------------------------------------------------------------------
*/

// Old service pages
Route::redirect('/services/digital-marketing', '/digital-marketing-service-uk', 301);
Route::redirect('/services/web-development', '/website-development-service-uk', 301);
Route::redirect('/services/seo', '/seo-service-uk', 301);
Route::redirect('/services/ui-ux', '/ui-ux-service-uk', 301);
Route::redirect('/services/branding', '/branding-service-uk', 301);
Route::redirect('/services/product-marketing', '/product-marketing-service-uk', 301);

// Old digital marketing child pages
Route::redirect('/services/digital-marketing/google-my-business-optimisation', '/google-business-profile-service-uk', 301);
Route::redirect('/services/digital-marketing/meta-ads-services', '/meta-ads-service-uk', 301);
Route::redirect('/services/digital-marketing/ppc-services', '/ppc-advertising-service-uk', 301);
Route::redirect('/services/digital-marketing/smm-services', '/social-media-marketing-service-uk', 301);

// Old SEO child pages
Route::redirect('/services/seo/national-seo', '/national-seo-service-uk', 301);
Route::redirect('/services/seo/international-seo', '/international-seo-service-uk', 301);
Route::redirect('/services/seo/technical-seo', '/technical-seo-service-uk', 301);
Route::redirect('/services/seo/content-seo', '/content-seo-service-uk', 301);
Route::redirect('/services/seo/image-seo', '/image-seo-service-uk', 301);
Route::redirect('/services/seo/local-seo', '/local-seo-service-uk', 301);
Route::redirect('/services/seo/ecommerce-seo', '/ecommerce-seo-service-uk', 301);
Route::redirect('/services/seo/on-page-seo', '/on-page-seo-service-uk', 301);
Route::redirect('/services/seo/off-page-seo', '/off-page-seo-service-uk', 301);

// Old website development child pages
Route::redirect('/services/website-development/wordpress', '/wordpress-website-development-service-uk', 301);
Route::redirect('/services/website-development/woocommerce', '/woocommerce-website-development-service-uk', 301);
Route::redirect('/services/website-development/shopify', '/shopify-website-development-service-uk', 301);
Route::redirect('/services/website-development/squarespace', '/squarespace-website-development-service-uk', 301);
Route::redirect('/services/website-development/wix', '/wix-website-development-service-uk', 301);
Route::redirect('/services/website-development/godaddy', '/godaddy-website-development-uk', 301);
Route::redirect('/services/website-development/laravel', '/laravel-website-development-service-uk', 301);
Route::redirect('/services/website-development/custom-php', '/custom-php-website-development-service-uk', 301);

// Old industry URLs
Route::redirect('/industries/cloudhealth', '/cloud-health-digital-service-uk', 301);
Route::redirect('/industries/cloudcare', '/cloud-care-digital-service-uk', 301);
Route::redirect('/industries/cloudedu', '/cloud-education-digital-service-uk', 301);
Route::redirect('/industries/cloudtravel', '/cloud-travel-digital-service-uk', 301);
Route::redirect('/industries/cloudrecruit', '/cloud-recruitment-digital-service-uk', 301);
Route::redirect('/industries/cloudpublic', '/cloud-public-digital-service-uk', 301);

// In case typo URL was already shared anywhere
Route::redirect('/cloud-traval-digital-service-uk', '/cloud-travel-digital-service-uk', 301);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')
        ->name('admin.')
        ->middleware(['role:super-admin|admin'])
        ->group(function () {
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

            Route::resource('roles', RoleController::class)->except(['show']);
            Route::resource('permissions', PermissionController::class)->except(['show']);
            Route::resource('users', UserController::class)->only(['index', 'edit', 'update']);

            Route::get('/audit-logs', [AuditLogController::class, 'index'])->name('audit-logs.index');

            Route::post('/impersonate/{user}', [ImpersonationController::class, 'start'])
                ->middleware('role:super-admin')
                ->name('impersonate.start');

            Route::post('/impersonate/stop', [ImpersonationController::class, 'stop'])
                ->middleware('role:super-admin')
                ->name('impersonate.stop');

            Route::prefix('settings')->name('settings.')->group(function () {
                Route::get('/company', [CompanySettingsController::class, 'edit'])->name('company.edit');
                Route::put('/company', [CompanySettingsController::class, 'update'])->name('company.update');
                Route::put('company/social-links', [CompanySettingsController::class, 'updateSocialLinks'])->name('socialLinks.update');

                Route::resource('branches', CompanyBranchController::class)->names('branches')->except(['show', 'destroy']);

                Route::resource('smtp', SmtpMailerController::class)->parameters(['smtp' => 'smtp'])
                    ->names('smtp')->except([]);

                Route::resource('contact-forms', ContactFormController::class)
                    ->names('contact-forms')->except(['show', 'destroy']);
            });

            Route::resource('case-studies', AdminCaseStudyController::class);
            Route::resource('portfolio-platforms', PortfolioPlatformController::class)->except(['show']);
            Route::resource('portfolio-items', PortfolioItemController::class)->except(['show']);

            Route::get('/leads', [ContactSubmissionController::class, 'index'])->name('leads.index');
            Route::get('/leads/{submission}', [ContactSubmissionController::class, 'show'])->name('leads.show');
            Route::patch('/leads/{submission}/status', [ContactSubmissionController::class, 'updateStatus'])->name('leads.status');

            Route::get('/consultations', [ConsultationAdminController::class, 'index'])->name('consultations.index');
            Route::get('/consultations/{consultation}', [ConsultationAdminController::class, 'show'])->name('consultations.show');
            Route::put('/consultations/{consultation}/status', [ConsultationAdminController::class, 'updateStatus'])->name('consultations.status');
            Route::post('/consultations/{consultation}/remarks', [ConsultationAdminController::class, 'addRemark'])->name('consultations.remarks.store');

            Route::get('audit-leads', [AuditLeadAdminController::class, 'index'])->name('audit-leads.index');
            Route::get('audit-leads/{auditLead}', [AuditLeadAdminController::class, 'show'])->name('audit-leads.show');
            Route::post('audit-leads/{auditLead}', [AuditLeadAdminController::class, 'update'])->name('audit-leads.update');

            Route::prefix('pricing')->name('pricing.')->group(function () {
                Route::resource('plans', PricingPlanController::class);
                Route::post('prices', [PricingPlanPriceController::class, 'store'])->name('prices.store');
                Route::post('features', [PricingPlanFeatureController::class, 'store'])->name('features.store');
                Route::delete('features/{feature}', [PricingPlanFeatureController::class, 'destroy'])->name('features.delete');

                Route::prefix('faq')->name('faq.')->group(function () {
                    Route::get('/', [PricingFaqController::class, 'index'])->name('index');
                    Route::get('/create', [PricingFaqController::class, 'create'])->name('create');
                    Route::post('/', [PricingFaqController::class, 'store'])->name('store');
                    Route::get('/{faq}/edit', [PricingFaqController::class, 'edit'])->name('edit');
                    Route::put('/{faq}', [PricingFaqController::class, 'update'])->name('update');
                    Route::delete('/{faq}', [PricingFaqController::class, 'destroy'])->name('delete');
                });
            });

            Route::resource('business-results', BusinessResultController::class);
        });

    // Support dashboard routes
    Route::prefix('support')
        ->name('support.')
        ->middleware(['role:super-admin|admin|support'])
        ->group(function () {
            Route::get('/dashboard', [SupportDashboardController::class, 'index'])->name('dashboard');
            Route::resource('blogs', BlogPostController::class)->except(['show']);

            Route::prefix('settings')->name('settings.')->group(function () {
                Route::resource('smtp', SmtpMailerController::class)->parameters(['smtp' => 'smtp'])
                    ->names('smtp')->except([]);

                Route::resource('contact-forms', ContactFormController::class)
                    ->names('contact-forms')->except(['show', 'destroy']);
            });

            Route::resource('case-studies', AdminCaseStudyController::class);
            Route::resource('portfolio-platforms', PortfolioPlatformController::class)->except(['show']);
            Route::resource('portfolio-items', PortfolioItemController::class)->except(['show']);

            Route::get('/leads', [ContactSubmissionController::class, 'index'])->name('leads.index');
            Route::get('/leads/{submission}', [ContactSubmissionController::class, 'show'])->name('leads.show');
            Route::patch('/leads/{submission}/status', [ContactSubmissionController::class, 'updateStatus'])->name('leads.status');

            Route::get('/consultations', [ConsultationAdminController::class, 'index'])->name('consultations.index');
            Route::get('/consultations/{consultation}', [ConsultationAdminController::class, 'show'])->name('consultations.show');
            Route::put('/consultations/{consultation}/status', [ConsultationAdminController::class, 'updateStatus'])->name('consultations.status');
            Route::post('/consultations/{consultation}/remarks', [ConsultationAdminController::class, 'addRemark'])->name('consultations.remarks.store');

            Route::resource('business-results', BusinessResultController::class);
        });
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});

require __DIR__ . '/auth.php';
Route::get('/international-seo-{locationSlug}', [LocationSeoController::class, 'international_Seo'])
    ->where('locationSlug', '[a-z0-9-]+')
    ->name('services.seo.international.generic');