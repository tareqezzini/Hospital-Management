<?php

namespace App\Repository\Appointments;

use App\Interfaces\Appointments\appointmentsInterface;
use App\Models\dashboard\Appointment;
use Illuminate\Support\Facades\Mail;

class appointmentsRepository implements appointmentsInterface
{
     // show Pending Appointments
     public function index()
     {
          $appointments = Appointment::where('type', 0)->get();
          return view('Dashboard.appointments.appointmentsPending', compact('appointments'));
     }
     // show Confirmed Appointments
     public function getApprovedAppointments()
     {
          $appointments = Appointment::where('type', 1)->get();
          return view('Dashboard.appointments.appointmentApproved', compact('appointments'));
     }
     // show Finished Appointments
     public function getFinishedAppointments()
     {
          $appointments = Appointment::where('type', 2)->get();
          return view('Dashboard.appointments.appointmentFinished', compact('appointments'));
     }

     // to Confirm Appointments
     public function confirmAppointments($request, $id)
     {
          $appointment = Appointment::findOrFail($id);
          $appointment->update([
               'type' => 1,
               'appointment' => $request->appointment
          ]);


          // Send email To confirm the Appointment
          $details = [
               'title' => 'Confirm The Appointment',
               'to'     => 'Dear ' . $appointment->name,
               'body' => 'We hope this message finds you in good health. This is a confirmation of your upcoming appointment 
               with Hospital Unity Care  on ' . $request->appointment . '.
               Please arrive at least 15 minutes before your scheduled appointment time to allow for registration and any necessary paperwork.
               If you have any questions or need to reschedule.'
          ];

          Mail::to($appointment->email)->send(new \App\Mail\confirmAppointmentMail($details));
          session()->flash('add');
          return back();
     }

     // to Finish the appointment

     public function finishAppointments($request,  $id)
     {
          $appointment = Appointment::findOrFail($id);
          $appointment->update([
               'type' => 2,
          ]);
          session()->flash('add');
          return back();
     }

     public function deleteAppointments($id)
     {
          Appointment::where('id', $id)->delete();

          session()->flash('delete');
          return back();
     }
}
