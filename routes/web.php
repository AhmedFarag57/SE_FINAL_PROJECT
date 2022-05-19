<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function() {
    return view('auth.login');
});



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



 Route::get('/doctors', function() {
     return view('backend.doctors.index');
 })->name('doctors.index');

 Route::get('/doctors/create', function() {
     return view('backend.doctors.create');
 })->name('doctors.create');