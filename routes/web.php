<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\InternController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, "LandingPage"])->name('landing.index');
Route::get('/hubungi-kami', [LandingController::class, "HubungiKami"])->name('landing.hubungi-kami');
Route::get('/kunjungan-sekolah', [LandingController::class, "KunjunganSekolah"])->name('landing.kunjungan-sekolah');

Route::get('/pengajuan-magang', [InternController::class, "index"])->name('landing.pengajuan-magang');
Route::post('/magang/store', [InternController::class, "store"])->name('intern.store');
