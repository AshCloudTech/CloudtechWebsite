<?php

use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CaseStudyController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us');
Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case.studies');