<?php


use App\Http\Controllers\Dashboard_Ray_Employee\invoicesRayController;
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
          'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:ray_employee']
     ],
     function () {


          //################################ dashboard Ray employee ########################################

          Route::get('/dashboard/ray_employee', function () {
               return view('Dashboard.dashboard_RayEmployee.dashboard');
          })->name('dashboard.ray_employee');

          //---------------------------------------------------------------------------------------------------------------
          Route::prefix('Dashboard/RayEmployee')->group(
               function () {
                    //invoices 
                    Route::resource('rayInvoices', invoicesRayController::class);
                    //get completed invoices
                    Route::get('completed_invoices', [invoicesRayController::class, 'completed_invoices'])->name('completed_invoices');
                    //get Xray of Patient
                    Route::get('viewXray/{id}', [invoicesRayController::class, 'viewXray'])->name('viewXray');
               }
          );
     }
);
