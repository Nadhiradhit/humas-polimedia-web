<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\SchoolIntern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InternController extends Controller
{
    public function index(){
        return view('landing.services.pengajuan-magang');
    }

    public function store(Request $request){
        Session::flash('name_school', $request->name_school);
        Session::flash('total_student', $request->total_student);
        Session::flash('name_student', $request->name_student);
        Session::flash('majority_school', $request->majority_school);
        Session::flash('student_class', $request->student_class);
        Session::flash('accompaying_teacher', $request->accompaying_teacher);
        Session::flash('submision_date', $request->submision_date);
        Session::flash('contact_person', $request->contact_person);


        $request->validate([
            'name_school' => 'required',
            'total_student' => 'required',
            'name_student' => 'required',
            'majority_school' => 'required',
            'student_class' => 'required|in:X,XI,XII',
            'accompaying_teacher' => 'required',
            'submision_date' => 'required',
            'contact_person' => 'required',
            'letter_intership' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        ]);

        $letter_file = $request->file('letter_intership');
        $file_ext = $letter_file->extension();
        $file_name = date('YmdHis') . "." . $file_ext;
        $letter_file->move(public_path('storage/letter/intern'), $file_name);

        $slug = Str::of($request->name_school)->slug('-');

        $data = [
            'name_school' => $request->name_school,
            'total_student' => $request->total_student,
            'name_student' => $request->name_student,
            'majority_school' => $request->majority_school,
            'student_class' => $request->student_class,
            'accompaying_teacher' => $request->accompaying_teacher,
            'submision_date' => $request->submision_date,
            'contact_person' => $request->contact_person,
            'letter_intership' => $file_name,
            'slug' => $slug
        ];

        SchoolIntern::create($data);


        return redirect()->route('landing.pengajuan-magang')->with('success', 'Pengajuan Magang Telah Disimpan');
    }
}
