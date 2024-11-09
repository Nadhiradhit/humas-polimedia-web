<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\GuestSurveyController;
use App\Http\Controllers\SchoolVisitController;
use App\Http\Controllers\InternSurveyController;
use App\Http\Controllers\SchoolSurveyController;
use App\Http\Controllers\AutheticationController;

// Guest/Landing Page Routes
Route::get('/', [LandingController::class, "LandingPage"])->name('landing.index');
Route::get('/hubungi-kami', [LandingController::class, "HubungiKami"])->name('landing.hubungi-kami');

// Intership Application Routes
Route::get('/pengajuan-magang', [InternController::class, "index"])->name('landing.pengajuan-magang');
Route::post('/pengajuang-magang/store', [InternController::class, "store"])->name('intern.store');

// School Visit Application Routes
Route::get('/pengajuan-kunjungan-sekolah', [SchoolVisitController::class, "index"])->name('landing.kunjungan-sekolah');
Route::post('/pengajuan-kunjungan-sekolah/store', [SchoolVisitController::class, "store"])->name('kunjungan.store');

// School Survey Routes
Route::get('/survey-kepuasan-sekolah', [SchoolSurveyController::class, "index"])->name('landing.survey-kepuasan-sekolah');
route::post('/survey-kepuasan-sekolah/store', [SchoolSurveyController::class, "store"])->name('school.survey.store');

// Intern Survey Routes
Route::get('/survey-kepuasan-magang', [InternSurveyController::class, "index"])->name('landing.survey-kepuasan-magang');
route::post('/survey-kepuasan-magang/store', [InternSurveyController::class, "store"])->name('intern.survey.store');

// Guest Survey Routes
Route::get('/survey-kepuasan-tamu', [GuestSurveyController::class, "index"])->name('landing.survey-kepuasan-tamu');
Route::post('/survey-kepuasan-tamu/store', [GuestSurveyController::class, "store"])->name('guest.survey.store');

// Login Page Routes
Route::get('/auth', [AutheticationController::class, "index"])->name('auth.login')->middleware('guest');
Route::post('/auth', [AutheticationController::class, "login"])->middleware('guest');
Route::get('/logout', [AutheticationController::class, "logout"])->name('auth.logout');

// Admin Humas Page Routes
Route::prefix('dashboard')->middleware(AdminMiddleware::class)->group(function () {
    Route::resource('/', AdminController::class)->name('index', 'admin.dashboard');
    Route::resource('/pengajuan-magang', InternController::class)->name('index', 'admin.services.pengajuan-magang');
    Route::resource('/kunjungan-sekolah', SchoolVisitController::class)->name('index', 'admin.services.pengajuan-sekolah');
    Route::resource('/survey-kepuasan-tamu', GuestSurveyController::class)->name('index', 'admin.services.survey.guest.index');
    Route::get('/survey-kepuasan-tamu/show/{slug}', [GuestSurveyController::class, 'show'])
    ->name('admin.services.survey.guest.show');
});

