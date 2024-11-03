<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestSurveyController extends Controller
{

    public function index()
    {
        return view('landing.services.kuisioner.survey-kepuasan-tamu');
    }
}
