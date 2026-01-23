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
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\ImpersonationController;
use App\Http\Controllers\Web\IndustryController;
use App\Http\Controllers\Web\Service\DigitalMarkController;
use App\Http\Controllers\Web\Service\WebsiteDevController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::get('/cloud-digital-solutions', [CloudDigitalController::class, 'cloudDigital'])->name('cloud.digital.solutions');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/careers/{slug}', [HomeController::class, 'careerDetail'])->name('careers.detail');

Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms.of.service');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');

Route::prefix('industries')->group(function () {
    Route::get('/cloudhealth', [IndustryController::class, 'cloudhealth'])->name('industries.cloudhealth');
    Route::get('/cloudcare', [IndustryController::class, 'cloudcare'])->name('industries.cloudcare');
    Route::get('/cloudedu', [IndustryController::class, 'cloudedu'])->name('industries.cloudedu');
    Route::get('/cloudtravel', [IndustryController::class, 'cloudtravel'])->name('industries.cloudtravel');
    Route::get('/cloudrecruit', [IndustryController::class, 'cloudrecruit'])->name('industries.cloudrecruit');
    Route::get('/cloudpublic', [IndustryController::class, 'cloudpublic'])->name('industries.cloudpublic');
});

Route::prefix('services')->group(function () {
    Route::get('/digital-marketing', [ServicesController::class, 'digitalMarketing'])->name('services.digital.marketing');
    Route::get('/ui-ux', [ServicesController::class, 'uiux'])->name('services.uiux');
    Route::get('/web-development', [ServicesController::class, 'webDevelopment'])->name('services.web.development');
    Route::get('/branding', [ServicesController::class, 'branding'])->name('services.branding');
    Route::get('/seo', [ServicesController::class, 'seo'])->name('services.seo');
    Route::get('/product-marketing', [ServicesController::class, 'productMarketing'])->name('services.product.marketing');
    

});  

Route::prefix('services/website-development')->group(function () {
    Route::get('/wordpress', [WebsiteDevController::class, 'wordpress'])->name('services.website-development.wordpress');
    Route::get('/woocommerce', [WebsiteDevController::class, 'woocommerce'])->name('services.website-development.woocommerce');
    Route::get('/shopify', [WebsiteDevController::class, 'shopify'])->name('services.website-development.shopify');
    Route::get('/squarespace', [WebsiteDevController::class, 'squarespace'])->name('services.website-development.squarespace');
    Route::get('/wix', [WebsiteDevController::class, 'wix'])->name('services.website-development.wix');
    Route::get('/godaddy', [WebsiteDevController::class, 'godaddy'])->name('services.website-development.godaddy');
    Route::get('/laravel', [WebsiteDevController::class, 'laravel'])->name('services.website-development.laravel');
    Route::get('/custom-php', [WebsiteDevController::class, 'customphp'])->name('services.website-development.custom-php');
});

Route::prefix('services/digital-marketing')->group(function () {
    Route::get('/national-seo', [DigitalMarkController::class, 'nationalseo'])->name('services.digi-marketing.national-seo');
    Route::get('/international-seo', [DigitalMarkController::class, 'internationalseo'])->name('services.digi-marketing.international-seo');
    Route::get('/technical-seo', [DigitalMarkController::class, 'tecnicalseo'])->name('services.digi-marketing.technical-seo');
    Route::get('/content-seo', [DigitalMarkController::class, 'contentseo'])->name('services.digi-marketing.content-seo');
    Route::get('/google-my-business-optimisation', [DigitalMarkController::class, 'googleMyBusinessOptimisation'])->name('services.digi-marketing.google-my-business-optimisation');
    Route::get('/image-seo', [DigitalMarkController::class, 'imageSeo'])->name('services.digi-marketing.image-seo');
    Route::get('/local-seo', [DigitalMarkController::class, 'localSeo'])->name('services.digi-marketing.local-seo');
    Route::get('/ecommerce-seo', [DigitalMarkController::class, 'ecommerceSeo'])->name('services.digi-marketing.ecommerce-seo');
    Route::get('/on-page-seo', [DigitalMarkController::class, 'onPageSeo'])->name('services.digi-marketing.on-page-seo');
    Route::get('/off-page-seo', [DigitalMarkController::class, 'offPageSeo'])->name('services.digi-marketing.off-page-seo');
    Route::get('/meta-ads-services', [DigitalMarkController::class, 'metaAdsServices'])->name('services.digi-marketing.meta-ads-services');
    Route::get('/ppc-services', [DigitalMarkController::class, 'ppcServices'])->name('services.digi-marketing.ppc-services');
    Route::get('/smm-services', [DigitalMarkController::class, 'smmServices'])->name('services.digi-marketing.smm-services');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Default dashboard (role-aware redirect handled in controller)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin area (super-admin / admin)
    Route::prefix('admin')
        ->name('admin.')
        ->middleware(['role:super-admin|admin'])
        ->group(function () {
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

            // RBAC Management
            Route::resource('roles', RoleController::class)->except(['show']);
            Route::resource('permissions', PermissionController::class)->except(['show']);
            Route::resource('users', UserController::class)->only(['index', 'edit', 'update']);

            // Audit logs
            Route::get('/audit-logs', [AuditLogController::class, 'index'])->name('audit-logs.index');

            // Impersonation (super-admin only)
            Route::post('/impersonate/{user}', [ImpersonationController::class, 'start'])
                ->middleware('role:super-admin')
                ->name('impersonate.start');

            Route::post('/impersonate/stop', [ImpersonationController::class, 'stop'])
                ->middleware('role:super-admin')
                ->name('impersonate.stop');
        });
});

Route::fallback(function () {
    return response()->view('404', [], 404); // or abort(404);
});

require __DIR__.'/auth.php';

