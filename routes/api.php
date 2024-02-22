<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AddressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::delete('/patients/{id}', [PatientController::class, 'destroy']);
Route::patch('/patients/{id}', [PatientController::class, 'update']);
Route::get('/patients/{id}', [PatientController::class, 'show']);
Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store']);

Route::delete('/addresses/{id}', [AddressController::class, 'destroy']);
Route::patch('/addresses/{id}', [AddressController::class, 'update']);
Route::get('/addresses/{id}', [AddressController::class, 'show']);
Route::get('/addresses', [AddressController::class, 'index']);
Route::post('/addresses/{id}', [AddressController::class, 'store']);