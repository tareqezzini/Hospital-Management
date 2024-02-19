<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\DoctorController;
use App\Http\Controllers\Auth\LaboEmployeeController;
use App\Http\Controllers\Auth\RayEmployeeController;
use App\Http\Controllers\Auth\PatientController;
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

// Route::group(
//      [
//           'prefix' => LaravelLocalization::setLocale(),
//           'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:ray_employee']
//      ],
//      function () {


Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login.dashboard');

// // ####################################################### User Login ######################################################################################
Route::post('/login/user', [AuthenticatedSessionController::class, 'store'])->middleware('guest')->name('user.login');

Route::post('logout/user', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout.user');

// // ####################################################### Admin Login #########################################################################################
Route::post('/login/admin', [AdminController::class, 'store'])->middleware('guest')->name('admin.login');
Route::post('logout/admin', [AdminController::class, 'destroy'])->middleware('auth:admin')->name('logout.admin');

// // ####################################################### Doctor Login #########################################################################################
Route::post('/login/doctor', [DoctorController::class, 'store'])->middleware('guest')->name('doctor.login');
Route::post('logout/doctor', [DoctorController::class, 'destroy'])->middleware('auth:doctor')->name('logout.doctor');

// //################################## Route RayEmployee ##############################################
Route::post('/login/ray_employee', [RayEmployeeController::class, 'store'])->middleware('guest')->name('login.ray_employee');
Route::post('/logout/ray_employee', [RayEmployeeController::class, 'destroy'])->middleware('auth:ray_employee')->name('logout.ray_employee');
// //################################## Route LaboEmployee ##############################################
Route::post('/login/labo_employee', [LaboEmployeeController::class, 'store'])->middleware('guest')->name('login.labo_employee');
Route::post('/logout/labo_employee', [LaboEmployeeController::class, 'destroy'])->middleware('auth:laboEmployee')->name('logout.labo_employee');


// //################################## Route patient ##############################################
Route::post('/login/patient', [PatientController::class, 'store'])->middleware('guest')->name('login.patient');
Route::post('/logout/patient', [PatientController::class, 'destroy'])->middleware('auth:patient')->name('logout.patient');
//      }
// );