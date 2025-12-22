<?php

use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CaseStudyController;
use App\Http\Controllers\Web\CloudDigitalController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us');
Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case.studies');
Route::get('/case-studies/{slug}', [CaseStudyController::class, 'detail'])->name('case.studies.detail');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::get('/contact-us/submit', [ContactUsController::class, 'submit'])->name('contact.us.submit');
Route::get('/cloud-digital-solutions', [CloudDigitalController::class, 'cloudDigital'])->name('cloud.digital.solutions');
Route::get('portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/careers/{slug}', [HomeController::class, 'careerDetail'])->name('careers.detail');
Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms.of.service');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/cloudhealth', [ServicesController::class, 'cloudhealth'])->name('services.cloudhealth');
    Route::get('/cloudcare', [ServicesController::class, 'cloudcare'])->name('services.cloudcare');
    Route::get('/cloudedu', [ServicesController::class, 'cloudedu'])->name('services.cloudedu');
    Route::get('/cloudtravel', [ServicesController::class, 'cloudtravel'])->name('services.cloudtravel');
    Route::get('/cloudrecruit', [ServicesController::class, 'cloudrecruit'])->name('services.cloudrecruit');
    Route::get('/cloudpublic', [ServicesController::class, 'cloudpublic'])->name('services.cloudpublic');
});

Route::get('/{any}', function () {
    return view('404');
})->where('any', '.*');