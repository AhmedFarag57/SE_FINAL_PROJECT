<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NursesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PharmacistsController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\ReceptionistsController;

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


Route::get('/', function() {
    return redirect('/login');
});

//Auth::routes();


//Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [HomeController::class, 'profileEdit'])->name('profile.edit');
Route::put('/profile/update', [HomeController::class, 'profileUpdate'])->name('profile.update');
Route::get('/profile/changepassword', [HomeController::class, 'changePassword'])->name('profile.change.password');
Route::post('/profile/changepassword', [HomeController::class, 'updatePassword'])->name('profile.changepassword');


Route::group(['middleware' => ['auth', 'role:Admin']], function() {



    
});


// Doctors
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
Route::get('/doctors/{id}', [DoctorsController::class, 'show'])->name('doctors.show')->where('id', '[0-9]+');
Route::get('/doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');
Route::post('/doctors/store', [DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/doctors/{id}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit')->where('id', '[0-9]+');
Route::put('/doctors/{id}/update', [DoctorsController::class, 'update'])->name('doctors.update')->where('id', '[0-9]+');
Route::delete('/doctors/{id}/destroy', [DoctorsController::class, 'destroy'])->name('doctors.destroy')->where('id', '[0-9]+');


// Patients
Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index');
Route::get('/patients/{id}', [PatientsController::class, 'show'])->name('patients.show')->where('id', '[0-9]+');
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create');
Route::post('/patients/store', [PatientsController::class, 'store'])->name('patients.store');
Route::get('/patients/{id}/edit', [PatientsController::class, 'edit'])->name('patients.edit')->where('id', '[0-9]+');
Route::put('/patients/{id}/update', [PatientsController::class, 'update'])->name('patients.update')->where('id', '[0-9]+');
Route::delete('/patients/{id}/destroy', [PatientsController::class, 'destroy'])->name('patients.destroy')->where('id', '[0-9]+');

// Nurses
Route::get('/nurses', [NursesController::class, 'index'])->name('nurses.index');
Route::get('/nurses/{id}', [NursesController::class, 'show'])->name('nurses.show')->where('id', '[0-9]+');
Route::get('/nurses/create', [NursesController::class, 'create'])->name('nurses.create');
Route::post('/nurses/store', [NursesController::class, 'store'])->name('nurses.store');
Route::get('/nurses/{id}/edit', [NursesController::class, 'edit'])->name('nurses.edit')->where('id', '[0-9]+');
Route::put('/nurses/{id}/update', [NursesController::class, 'update'])->name('nurses.update')->where('id', '[0-9]+');
Route::delete('/nurses/{id}/destroy', [NursesController::class, 'destroy'])->name('nurses.destroy')->where('id', '[0-9]+');

// Pharmacists
Route::get('/pharmacists', [PharmacistsController::class, 'index'])->name('pharmacists.index');
Route::get('/pharmacists/{id}', [PharmacistsController::class, 'show'])->name('pharmacists.show')->where('id', '[0-9]+');
Route::get('/pharmacists/create', [PharmacistsController::class, 'create'])->name('pharmacists.create');
Route::post('/pharmacists/store', [PharmacistsController::class, 'store'])->name('pharmacists.store');
Route::get('/pharmacists/{id}/edit', [PharmacistsController::class, 'edit'])->name('pharmacists.edit')->where('id', '[0-9]+');
Route::put('/pharmacists/{id}/update', [PharmacistsController::class, 'update'])->name('pharmacists.update')->where('id', '[0-9]+');
Route::delete('/pharmacists/{id}/destroy', [PharmacistsController::class, 'destroy'])->name('pharmacists.destroy')->where('id', '[0-9]+');

// Receptionists
Route::get('/receptionists', [ReceptionistsController::class, 'index'])->name('receptionists.index');
Route::get('/receptionists/{id}', [ReceptionistsController::class, 'show'])->name('receptionists.show')->where('id', '[0-9]+');
Route::get('/receptionists/create', [ReceptionistsController::class, 'create'])->name('receptionists.create');
Route::post('/receptionists/store', [ReceptionistsController::class, 'store'])->name('receptionists.store');
Route::get('/receptionists/{id}/edit', [ReceptionistsController::class, 'edit'])->name('receptionists.edit')->where('id', '[0-9]+');
Route::put('/receptionists/{id}/update', [ReceptionistsController::class, 'update'])->name('receptionists.update')->where('id', '[0-9]+');
Route::delete('/receptionists/{id}/destroy', [ReceptionistsController::class, 'destroy'])->name('receptionists.destroy')->where('id', '[0-9]+');

// Departments
Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
Route::post('/departments/store', [DepartmentsController::class, 'store'])->name('departments.store');
Route::get('/departments/{id}/edit', [DepartmentsController::class, 'edit'])->name('departments.edit')->where('id', '[0-9]+');
Route::put('/departments/{id}/update', [DepartmentsController::class, 'update'])->name('departments.update')->where('id', '[0-9]+');
Route::delete('/departments/{id}/destroy', [DepartmentsController::class, 'destroy'])->name('departments.destroy')->where('id', '[0-9]+');






// Pharmacy
Route::get('/pharmacy', [PharmacyController::class, 'index'])->name('pharmacy.index');
Route::get('/pharmacy/{id}', [PharmacyController::class, 'show'])->name('pharmacy.show')->where('id', '[0-9]+');
Route::get('/pharmacy/medicine/create', [PharmacyController::class, 'create'])->name('medicines.create');
Route::post('/pharmacy/store', [PharmacyController::class, 'store'])->name('pharmacy.store');
Route::get('/pharmacy/medicine/{id}/edit', [PharmacyController::class, 'edit'])->name('medicines.edit')->where('id', '[0-9]+');
Route::put('/pharmacy/{id}/update', [PharmacyController::class, 'update'])->name('pharmacy.update')->where('id', '[0-9]+');
Route::delete('/pharmacy/{id}/destroy', [PharmacyController::class, 'destroy'])->name('pharmacy.destroy')->where('id', '[0-9]+');





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
