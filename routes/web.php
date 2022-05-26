<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PharmacistsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// The Route to Home page for all Site
// Route::get('/', function () {
//     return redirect('/login');
// });

// Route::get('/', function() {
//     return view('layouts.app');
// });

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');



Route::get('/assignRole', function() {
    return view('backend.assignrole.index');
})->name('assignrole.index');

Route::get('/assignRole/create', function() {
    return view('backend.assignrole.create');
})->name('assignrole.create');



Route::get('/roles-permissions', function() {
    return view('backend.permissions.edit');
})->name('roles-permissions');

Route::get('/permission/create', function() {
    return view('backend.permissions.create');
})->name('permission.create');


// Doctors
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
Route::get('/doctors/{id}', [DoctorsController::class, 'show'])->name('doctors.show')->where('id', '[0-9]+');
Route::get('/doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');
Route::post('/doctors/store', [DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/doctors/{id}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit');
Route::put('/doctors/{id}/update', [DoctorsController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{id}/destroy', [DoctorsController::class, 'destroy'])->name('doctors.destroy');


// Patients
Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');
Route::get('/patients/{id}', [PatientsController::class, 'show'])->name('patients.show')->where('id', '[0-9]+');
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create');
Route::post('/patients/store', [PatientsController::class, 'store']);

// Nurses
Route::get('/nurses', [NursesController::class, 'index'])->name('nurses.index');
Route::get('/nurses/{id}', [NursesController::class, 'show'])->name('nurses.show')->where('id', '[0-9]+');
Route::get('/nurses/create', [NursesController::class, 'create'])->name('nurses.create');
Route::post('/nurses/store', [NursesController::class, 'store']);

// Pharmacists
Route::get('/pharmacists', [PharmacistsController::class, 'index'])->name('pharmacists.index');
Route::get('/pharmacists/{id}', [PharmacistsController::class, 'show'])->name('pharmacists.show')->where('id', '[0-9]+');
Route::get('/pharmacists/create', [PharmacistsController::class, 'create'])->name('pharmacists.create');
Route::post('/pharmacists/store', [PharmacistsController::class, 'store']);