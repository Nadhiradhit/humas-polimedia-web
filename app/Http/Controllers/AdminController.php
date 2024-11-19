<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GuestSurvey;
use App\Models\SchoolVisit;
use Illuminate\Support\Str;
use App\Models\InternSurvey;
use App\Models\SchoolIntern;
use App\Models\SchoolSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $survey_guest = GuestSurvey::limit(1)->get();
        $survey_intern = InternSurvey::limit(1)->get();
        $survey_school = SchoolSurvey::limit(1)->get();
        $school_intern = SchoolIntern::limit(1)->get();
        $school_visit = SchoolVisit::limit(1)->get();
        return view('admin.dashboard', compact('survey_guest', 'survey_intern', 'survey_school', 'school_intern', 'school_visit'));
    }

    public function create(){

        $data = User::paginate(5);

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

    public function destroy(string $id){

        User::where('id', $id)->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data akun humas berhasil dihapus');
    }


    //     public function resetPassword($id)
    // {
    //     $user = User::findOrFail($id);

    //     // Generate random password
    //     $newPassword = Str::random(8);
    //     $user->password = Hash::make($newPassword);
    //     $user->save();

    //     // Optional: Send the new password via email
    //     // Mail::to($user->email)->send(new PasswordResetMail($newPassword));

    //     return redirect()->back()->with('success', "Password reset successfully! New password: $newPassword");
    // }
}
