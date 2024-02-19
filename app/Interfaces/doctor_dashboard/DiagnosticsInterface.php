<?php

namespace App\Interfaces\doctor_dashboard;


interface DiagnosticsInterface
{
     public function store($request);
     public function show($id);
     public function addReview($request);
}
