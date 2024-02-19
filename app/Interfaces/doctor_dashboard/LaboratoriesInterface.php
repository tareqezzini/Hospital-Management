<?php

namespace App\Interfaces\doctor_dashboard;


interface LaboratoriesInterface
{
     public function store($request);

     public function update($request, $id);

     public function destroy($id);
}
