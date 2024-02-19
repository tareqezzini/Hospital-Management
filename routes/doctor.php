<?php

use App\Http\Controllers\doctor\DiagnosticController;
use App\Http\Controllers\doctor\InvoiceController;
use App\Http\Controllers\doctor\LaboratorieController;
use App\Http\Controllers\doctor\PatientDetailsController;
use App\Http\Controllers\doctor\RayController;
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


Route::group(
     [
          'prefix' => LaravelLocalization::setLocale(),
          'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
     ],
     function () {



          Route::get('/dashboard/doctor', function () {
               return view('Dashboard.dashboard_doctor.dashboard');
          })->middleware(['auth:doctor'])->name('dashboard.doctor');


          //---------------------------------------------------------------------------------------------------------------


          Route::middleware(['auth:doctor'])->group(function () {

               Route::prefix('doctor')->group(function () {

                    // invoices route 
                    Route::resource('invoices', InvoiceController::class);
                    //get completed invoices
                    Route::get('completed_invoices', [InvoiceController::class, 'completedInvoices'])->name('completedInvoices');
                    //get review invoices
                    Route::get('review_invoices', [InvoiceController::class, 'reviewInvoices'])->name('reviewInvoices');
                    //add Review
                    Route::post('add_review', [DiagnosticController::class, 'addReview'])->name('add_review');
                    // diagnostic route 
                    Route::resource('Diagnostics', DiagnosticController::class);
                    // rays route
                    Route::resource('rays', RayController::class);
                    // patient_details route
                    Route::get('patient_details/{id}', [PatientDetailsController::class, 'index'])->name('patient_details');

                    // rays route
                    Route::resource('Laboratories', LaboratorieController::class);
                    Route::get('show_laboratorie/{id}', [InvoiceController::class, 'showLaboratorie'])->name('show.laboratorie');
               });
          });
     }

);
