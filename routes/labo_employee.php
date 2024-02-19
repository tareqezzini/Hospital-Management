<?php

use App\Http\Controllers\Dashboard_labo_employee\invoicesLaboratoryController;
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
          'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:laboEmployee']
     ],
     function () {


          //################################ dashboard Ray employee ########################################

          Route::get('/dashboard/labo_employee', function () {
               return view('Dashboard.dashboard_LaboEmployee.dashboard');
          })->name('dashboard.labo_employee');

          //---------------------------------------------------------------------------------------------------------------
          Route::prefix('Dashboard/LaboEmployee')->group(
               function () {
                    //invoices 
                    Route::resource('laboInvoices', invoicesLaboratoryController::class);
                    // //get completed invoices
                    Route::get('completed_invoices', [invoicesLaboratoryController::class, 'completed_invoices'])->name('completed_invoices_labo');
                    // //get Xray of Patient
                    Route::get('view_laboratories/{id}', [invoicesLaboratoryController::class, 'viewTestLabo'])->name('view_laboratories');
               }
          );
     }

);
