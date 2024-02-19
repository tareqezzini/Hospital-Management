<?php

use App\Http\Controllers\Website\indexController;
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

Route::resource('/', indexController::class);
// get doctor Related to The Sections
Route::get('/get_doctor/{id}', [indexController::class, 'getDoctors']);
Route::post('/storeAppointment', [indexController::class, 'storeAppointment'])->name('storeAppointment');


require __DIR__ . '/auth.php';
