<?php

use App\Events\myEvent;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\appointmentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\doctorController;
use App\Http\Controllers\Dashboard\LaboratoryEmployeeController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeController;
use App\Http\Controllers\dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//==========================================| Livewire Route |========================================================


//----------------------------- GroupServices route ------------------------------------------

Route::view('Add_GroupServices', 'livewire.include_create')->name('Add_GroupServices')->middleware('auth');

//----------------------------- Single Invoices route ------------------------------------------

Route::view('SingleInvoices', 'Dashboard.SingleInvoices.index')->name('SingleInvoices')->middleware("auth:admin");
//------------------------------------------------------------------------------------------------------------------
Route::group(
     [
          'prefix' => LaravelLocalization::setLocale(),
          'middleware' => [
               'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'
          ]
     ],
     function () {
          //     Route User 
          Route::get('/dashboard/user', [DashboardController::class, 'index'])->middleware('auth');
          //     Route Admin 
          Route::get('/dashboard/admin', function () {

               return view('dashboard.admin.index');
          })->middleware('auth:admin')->name('dashboard.admin');


          //---------------------------------------------------------------------------------------
          Route::middleware("auth:admin")->group(function () {

               //     Route Sections 
               Route::resource('dashboard/sections', SectionController::class);
               //     Route Doctors
               Route::resource('/dashboard/doctors', doctorController::class);
               Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
               Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
               //     Route Doctors
               Route::resource('Service', SingleServiceController::class);

               //----------------------------- Ambulance route ------------------------------------------
               Route::resource('Ambulance', AmbulanceController::class);

               // Route::view('Add_GroupServices', 'livewire.GroupServices.')->name('Add_GroupServices');


               //----------------------------- Patients route ------------------------------------------

               Route::resource('Patients', PatientController::class);

               //----------------------------- Receipt route --------------------------------------
               Route::resource('Receipt', ReceiptAccountController::class);

               //----------------------------- Payment route ------------------------------------------

               Route::resource('Payment', PaymentAccountController::class);


               //----------------------------- Ray employee route ------------------------------------------
               Route::resource('ray_employee', RayEmployeeController::class);
               //----------------------------- Laboratory employee route ------------------------------------------
               Route::resource('laboratory_employees', LaboratoryEmployeeController::class);
               //----------------------------- Appointments employee route ------------------------------------------
               //show appointments not Approved
               Route::get('/appointments', [appointmentController::class, 'index'])->name('appointments');
               //show appointments  Approved
               Route::get('/appointmentsApproved', [appointmentController::class, 'getApprovedAppointments'])->name('appointmentsApproved');
               // Confirm the appointment
               Route::post('/confirmAppointments/{id}', [appointmentController::class, 'confirmAppointments'])->name('confirmAppointments');

               // Finish the appointment
               Route::post('/finishAppointments/{id}', [appointmentController::class, 'finishAppointments'])->name('finishAppointments');

               //show The Finished Appointment
               Route::get('/appointmentsFinished', [appointmentController::class, 'getFinishedAppointments'])->name('appointmentsFinished');

               // Finish the appointment
               Route::delete('/deleteAppointments/{id}', [appointmentController::class, 'deleteAppointments'])->name('deleteAppointments');
          });
     }

);
