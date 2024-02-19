<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\interfaces\Patients\PatientsInterfaces;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public $Patient;
    public function __construct(PatientsInterfaces $Patient)
    {
        $this->Patient = $Patient;
    }
    public function index()
    {
        return $this->Patient->index();
    }

    public function create()
    {
        return $this->Patient->create();
    }


    public function store(StorePatientRequest $request)
    {
        return $this->Patient->store($request);
    }
    // get Patients info
    public function show($id)
    {
        return $this->Patient->show($id);
    }
    public function edit($id)
    {
        return $this->Patient->edit($id);
    }


    public function update(StorePatientRequest $request)
    {
        return $this->Patient->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Patient->destroy($request);
    }
}
