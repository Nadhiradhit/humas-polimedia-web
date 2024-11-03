<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolSurveyController extends Controller
{
    public function index()
    {
        return view('landing.services.kuisioner.survey-kepuasan-sekolah');
    }
}
