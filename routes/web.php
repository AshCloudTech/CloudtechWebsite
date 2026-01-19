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

Route::prefix('services')->group(function () {
    Route::get('/cloudhealth', [ServicesController::class, 'cloudhealth'])->name('services.cloudhealth');
    Route::get('/cloudcare', [ServicesController::class, 'cloudcare'])->name('services.cloudcare');
    Route::get('/cloudedu', [ServicesController::class, 'cloudedu'])->name('services.cloudedu');
    Route::get('/cloudtravel', [ServicesController::class, 'cloudtravel'])->name('services.cloudtravel');
    Route::get('/cloudrecruit', [ServicesController::class, 'cloudrecruit'])->name('services.cloudrecruit');
    Route::get('/cloudpublic', [ServicesController::class, 'cloudpublic'])->name('services.cloudpublic');
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

