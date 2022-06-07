<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\MedicinesController;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::resource('medicines', MedicinesController::class);

/**
 *  PUBLIC API
 */

// Login
Route::post('/login', [AuthController::class, 'login']);

// Show all the medicines
Route::get('/medicines', [MedicinesController::class, 'index']);

// Show specific medicine
Route::get('/medicines/{id}', [MedicinesController::class, 'show']);

// Search about medicine by name
Route::get('/medicines/search/{name}', [MedicinesController::class, 'search']);

/**
 *  PROTECTED API
 */

Route::group(['middleware' => ['auth:sanctum']], function() {

    // Create new medicine
    Route::post('/medicines', [MedicinesController::class, 'store']);

    // Update specific medicine
    Route::put('/medicines/{id}', [MedicinesController::class, 'update']);

    // Delete specific medicine
    Route::delete('/medicines/{id}', [MedicinesController::class, 'destroy']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
