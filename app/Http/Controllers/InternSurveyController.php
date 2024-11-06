<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternSurvey;
use App\Models\SurveyValue;
use Illuminate\Support\Str;

class InternSurveyController extends Controller
{
    public function index(Request $request)
    {
        $value = new SurveyValue();
        $data['surveyValue'] = $value->surveyValue;
        $data['question'] = $request->session()->get('question');
        return view('landing.services.kuisioner.survey-kepuasan-magang', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'intern_time' => 'required',
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
        ]);

        InternSurvey::create([
            'school_name' => $request->input('school_name'),
            'intern_time' => $request->input('intern_time'),
            'question_1' => $request->input('question_1'),
            'question_2' => $request->input('question_2'),
            'question_3' => $request->input('question_3'),
            'question_4' => $request->input('question_4'),
            'question_5' => $request->input('question_5'),
            'question_6' => $request->input('question_6'),
            'question_7' => $request->input('question_7'),
            'slug' => Str::of($request->input('school_name'))->slug('-'),
        ]);



        return redirect()->route('landing.survey-kepuasan-magang')->with('success', 'Pengajuan Survey Magang Telah Disimpan');
    }
}
