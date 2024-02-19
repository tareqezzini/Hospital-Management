<?php

namespace App\interfaces\RayEmployee;


interface RayEmployeeInterface
{
     public function index();

     public function store($request);

     public function update($request, $id);

     public function destroy($id);
}
