<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, "LandingPage"])->name('landing.index');
Route::get('/hubungi-kami', [LandingController::class, "HubungiKami"])->name('landing.hubungi-kami');
