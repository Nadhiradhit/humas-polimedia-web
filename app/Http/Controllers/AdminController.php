<?php

namespace App\Http\Controllers;

use App\Models\GuestSurvey;
use App\Models\InternSurvey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $survey_guest = GuestSurvey::limit(5)->get();
        $survey_intern = InternSurvey::limit(5)->get();
        return view('admin.dashboard', compact('survey_guest', 'survey_intern'));
    }

    public function create(){

        $data = User::all();

        return view('admin.create-user')->with('data', $data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Akun Humas Berhasil Dibuat');
    }
}
