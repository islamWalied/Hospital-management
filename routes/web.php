<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('dashboard');
//});

Route::get('/',[HomeController::class , 'index']);
Route::get('/about',[HomeController::class , 'about']);
Route::get('/blog',[HomeController::class , 'blog']);
Route::get('/doctor',[HomeController::class , 'doctor']);
Route::get('/contact',[HomeController::class , 'contact']);
Route::get('/home',[HomeController::class , 'redirect'])->middleware('auth');


Route::controller(DoctorsController::class)->group(function () {
    Route::get('/view_doctors', 'show');
    Route::get('/view_add_doctor', 'show_add_doctor');
    Route::post('/add_doctor', 'store');
})->middleware('auth');


Route::controller(AppointmentController::class)->group(function () {
    Route::get('/my-appointment', 'index');
    Route::post('/appointment', 'store');
    Route::get('/delete-appointment/{id}', 'destroy');
})->middleware('auth');


Route::controller(AdminController::class)->group(function () {
    Route::get('/show-appointment', 'index');
    Route::get('/cancel-appointment/{id}', 'destroy');
    Route::get('/approve-appointment/{id}', 'approve');
    Route::get('/update-doctor/{id}', 'update');
    Route::get('/delete-doctor/{id}', 'delete');
    Route::post('/edit_doctor/{id}', 'edit');
})->middleware('auth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
