<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Diagnostic;
use App\Models\dashboard\Laboratorie;
use App\Models\dashboard\Ray;
use Illuminate\Http\Request;

class PatientDetailsController extends Controller
{
    public function index($id)
    {

        $patient_records = Diagnostic::where('patient_id', $id)->get();
        $patient_rays = Ray::where('patient_id', $id)->get();
        $patient_Laboratories  = Laboratorie::where('patient_id', $id)->get();
        return view('Dashboard.dashboard_doctor.invoices.patient_details', compact('patient_records', 'patient_rays', 'patient_Laboratories'));
    }
}
