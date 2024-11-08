<?php

namespace App\Http\Controllers;

use App\Models\GuestSurvey;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestSurveyController extends Controller
{

    public function index()
    {
        if(Auth::check()) {
            $user = Auth::user();
            if(str_ends_with($user->email, '@polimedia.ac.id')) {
                $data = GuestSurvey::all();
                return view('admin.services.survey.guest.index')->with('data', $data);
            }
        }
        else{
            return view('landing.services.kuisioner.survey-kepuasan-tamu');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required',
            'information_purpose' => 'required',
            'clarity_info' => 'required',
            'service_quality' => 'required',
            'service_duration' => 'required',
        ]);

        $infomationOther = $request->input('information_purpose');
        if($infomationOther == "Other"){
            $infomationOther = $request->input('other_information_purpose');
        }

        GuestSurvey::create([
            'guest_name' => $request->input('guest_name'),
            'information_purpose' => $infomationOther,
            'clarity_info' => $request->input('clarity_info'),
            'service_quality' => $request->input('service_quality'),
            'service_duration' => $request->input('service_duration'),
            'slug' => Str::of($request->input('guest_name'))->slug('-'),
        ]);

        return redirect()->route('landing.survey-kepuasan-tamu')->with('success', 'Pengajuan Survey Tamu Telah Disimpan');
    }

    public function destroy(string $id){

        GuestSurvey::where('id', $id)->delete();

        return redirect()->route('admin.services.survey.guest.index')->with('success', 'Data berhasil dihapus');
    }
}
