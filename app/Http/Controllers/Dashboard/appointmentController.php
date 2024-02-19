<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Appointments\appointmentsInterface;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public $appointment;
    public function __construct(appointmentsInterface $appointment)
    {
        $this->appointment = $appointment;
    }

    // Return Not approved appointments
    public function index()
    {
        return $this->appointment->index();
    }

    // Return approved appointments
    public function getApprovedAppointments()
    {
        return $this->appointment->getApprovedAppointments();
    }

    public function confirmAppointments(Request $request, $id)
    {
        return $this->appointment->confirmAppointments($request, $id);
    }
    public function finishAppointments(Request $request,  $id)
    {
        return $this->appointment->finishAppointments($request, $id);
    }
   
    public function getFinishedAppointments()
    {
        return $this->appointment->getFinishedAppointments();
    }
    public function deleteAppointments($id)
    {
        return $this->appointment->deleteAppointments($id);
    }
}