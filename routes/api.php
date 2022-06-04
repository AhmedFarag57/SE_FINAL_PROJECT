<?php

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

Route::get('/medicines', [MedicinesController::class, 'index']);
Route::post('/medicines', [MedicinesController::class, 'store']);
Route::get('/medicines/{id}', [MedicinesController::class, 'show']);
Route::put('/medicines/{id}', [MedicinesController::class, 'update']);
Route::delete('/medicines/{id}', [MedicinesController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
