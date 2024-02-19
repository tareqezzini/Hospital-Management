<?php

namespace App\Interfaces\Appointments;


interface appointmentsInterface
{
     public function index();
     public function getApprovedAppointments();
     public function confirmAppointments($request,  $id);
     public function finishAppointments($request,  $id);
     public function getFinishedAppointments();
     public function deleteAppointments($id);
}
