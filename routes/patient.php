<?php

use App\Http\Controllers\Dashboard_labo_employee\invoicesLaboratoryController;
use App\Http\Controllers\patient_dashboard\patientController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
     [
          'prefix' => LaravelLocalization::setLocale(),
          'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:patient']
     ],
     function () {


          //################################ dashboard Ray employee ########################################

          Route::get('/dashboard/patient', function () {
               return view('Dashboard.dashboard_patient.dashboard');
          })->name('dashboard.patient');

          //---------------------------------------------------------------------------------------------------------------
          Route::prefix('Dashboard/patient')->group(
               function () {
                    Route::get('invoices', [patientController::class, 'invoices'])->name('invoices.patient');
                    Route::get('laboratories', [patientController::class, 'laboratories'])->name('laboratories.patient');
                    Route::get('view_laboratories/{id}', [patientController::class, 'viewLaboratories'])->name('laboratories.view');
                    Route::get('rays', [patientController::class, 'rays'])->name('rays.patient');
                    Route::get('view_rays/{id}', [patientController::class, 'viewRays'])->name('rays.view');
                    Route::get('payments', [patientController::class, 'payments'])->name('payments.patient');
               }
          );
     }
);



require __DIR__ . '/auth.php';