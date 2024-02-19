<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Appointment;
use App\Models\dashboard\doctor;
use App\Models\dashboard\Section;
use App\Models\dashboard\Service;
use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index()
    {
        $doctors = doctor::take(4)->get();
        $services = Service::all();
        $sections = Section::all();
        return view('Website.index', compact('services', 'doctors', 'sections'));
    }
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'username'  => 'required|string',
                'email'     => 'required|email',
                'phone'     => 'required|string',
                'section'   => 'required|numeric',
                'doctor'    => 'required|numeric',
                'notes'     =>   'string'
            ]
        );
        try {

            Appointment::create([
                'name'          => $request->username,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'doctor_id'     => $request->doctor,
                'section_id'    => $request->section,
                'notes'         => $request->description
            ]);
            return redirect()->back()->with('success', 'Your request for an appointment has been sent.');
        } catch (\Exception) {
            return redirect()->back()->with('error', 'Something Went Wrong.');
        }
    }





    public function getDoctors($id)
    {
        $data = doctor::where('section_id', $id)->get();
        return response()->json($data);
    }
}
