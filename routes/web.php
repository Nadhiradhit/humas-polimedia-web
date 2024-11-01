<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\SchoolVisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, "LandingPage"])->name('landing.index');
Route::get('/hubungi-kami', [LandingController::class, "HubungiKami"])->name('landing.hubungi-kami');

Route::get('/pengajuan-magang', [InternController::class, "index"])->name('landing.pengajuan-magang');
Route::post('/magang/store', [InternController::class, "store"])->name('intern.store');

Route::get('/pengajuan-kunjungan-sekolah', [SchoolVisitController::class, "index"])->name('landing.kunjungan-sekolah');
Route::post('/pengajuan-kunjungan-sekolah/store', [SchoolVisitController::class, "store"])->name('kunjungan.store');
