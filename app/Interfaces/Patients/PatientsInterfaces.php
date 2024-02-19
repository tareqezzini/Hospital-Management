<?php

namespace App\interfaces\Patients;

interface PatientsInterfaces
{
     // Get All Patients
     public function index();
     // Create New Patients
     public function create();
     // Store new Patients
     public function store($request);
     // edit Patients
     public function edit($id);
     // update Patients
     // get Patients info
     public function show($id);
     public function update($request);
     // Deleted Patients
     public function destroy($request);
}
