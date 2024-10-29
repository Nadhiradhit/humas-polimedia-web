<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function LandingPage()
    {
        return view('landing.index');
    }

    public function HubungiKami()
    {
        return view('landing.hubungi-kami');
    }
}
