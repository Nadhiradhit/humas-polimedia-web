<?php

namespace App\Http\Controllers;

use App\Models\SchoolVisit;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SchoolVisitController extends Controller
{
    public function index()
    {
        return view('landing.services.kunjungan-sekolah');
    }

    public function store(Request $request){
        Session::flash('school_name', $request->school_name);
        Session::flash('total_student', $request->total_student);
        Session::flash('school_majority', $request->school_majority);
        Session::flash('student_class', $request->student_class);
        Session::flash('total_teacher', $request->total_teacher);
        Session::flash('submision_date', $request->submision_date);
        Session::flash('time_visit', $request->time_visit);
        Session::flash('request_program', $request->request_program);
        Session::flash('contact_person', $request->contact_person);
        Session::flash('more_information', $request->more_information);

        $request->validate([
            'school_name' => 'required',
            'total_student' => 'required',
            'school_majority' => 'required',
            'student_class' => 'required|in:X,XI,XII',
            'total_teacher' => 'required',
            'submision_date' => 'required',
            'time_visit' => 'required',
            'request_program' => 'required',
            'contact_person' => 'required',
            'letter_visit' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
            'more_information' => 'required',
        ]);

        $letter_file = $request->file('letter_visit');
        $file_ext = $letter_file->extension();
        $file_name = date('YmdHis') . "." . $file_ext;
        $letter_file->move(public_path('storage/letter/visit'), $file_name);

        $data = [
            'school_name' => $request->school_name,
            'total_student' => $request->total_student,
            'school_majority' => $request->school_majority,
            'student_class' => $request->student_class,
            'total_teacher' => $request->total_teacher,
            'submision_date' => $request->submision_date,
            'time_visit' => $request->time_visit,
            'request_program' => $request->request_program,
            'contact_person' => $request->contact_person,
            'letter_visit' => $file_name,
            'more_information' => $request->more_information,
        ];

        SchoolVisit::create($data);

        return redirect()->route('landing.kunjungan-sekolah')->with('success', 'Pengajuan Magang Telah Disimpan');
    }
}
