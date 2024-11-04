<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolSurvey;
use App\Models\SurveyValue;

class SchoolSurveyController extends Controller
{
    public function index(Request $request)
    {
        $value = new SurveyValue();
        $data['surveyValue'] = $value->surveyValue;
        $data['question'] = $request->session()->get('question');
        return view('landing.services.kuisioner.survey-kepuasan-sekolah', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'date_visit' => 'required',
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
        ]);

        $survey = new SchoolSurvey();
        $survey->fill($request->all());
        $survey->save();

        return redirect()->route('landing.survey-kepuasan-sekolah')->with('success', 'Pengajuan Survey Sekolah Telah Disimpan');
    }

}
