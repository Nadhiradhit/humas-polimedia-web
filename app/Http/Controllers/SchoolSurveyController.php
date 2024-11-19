<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolSurvey;
use App\Models\SurveyValue;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SchoolSurveyController extends Controller
{
    public function index(Request $request)
    {
        if(Auth:: check()){
            $user = Auth::user();
            if(str_ends_with($user->email, '@polimedia.ac.id')) {
                $search = $request->input('search');
                $school = SchoolSurvey::when($search, function ($query, $search){
                    return $query->where('school_name', 'like', '%' . $search . '%')
                                ->orWhereDate('date_visit', 'like', '%' . $search . '%');
                })->paginate(10);

                return view('admin.services.survey.school.index', compact('search', 'school'));

            }
        }else{
            $value = new SurveyValue();
            $data['surveyValue'] = $value->surveyValue;
            $data['question'] = $request->session()->get('question');
            return view('landing.services.kuisioner.survey-kepuasan-sekolah', $data);
        }
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

        SchoolSurvey::create([
            'school_name' => $request->input('school_name'),
            'date_visit' => $request->input('date_visit'),
            'question_1' => $request->input('question_1'),
            'question_2' => $request->input('question_2'),
            'question_3' => $request->input('question_3'),
            'question_4' => $request->input('question_4'),
            'question_5' => $request->input('question_5'),
            'question_6' => $request->input('question_6'),
            'question_7' => $request->input('question_7'),
            'slug' => Str::of($request->input('school_name'))->slug('-'),
        ]);

        return redirect()->route('landing.survey-kepuasan-sekolah')->with('success', 'Pengajuan Survey Sekolah Telah Disimpan');
    }

    public function show(string $slug){
        $data = SchoolSurvey::where('slug', $slug)->first();
        return view('admin.services.survey.school.show')->with('data', $data);
    }

    public function destroy(string $id){
        SchoolSurvey::where('id', $id)->delete();

        return redirect()->route('admin.services.survey.school.index')->with('success', 'Data berhasil dihapus');
    }
}
