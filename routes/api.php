<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('test',[ApiController::class,'index']);

// Route::post('test',[ApiController::class,'upload']);

// Route::put('test/edit/{id}',[ApiController::class,'edit']);

// Route::delete('test/edit/{id}',[ApiController::class,'delete']);

Route::get('test',[TaskController::class,'index']);

Route::post('test',[TaskController::class,'upload']);

Route::put('test/edit/{id}',[TaskController::class,'edit']);

Route::delete('test/edit/{id}',[TaskController::class,'delete']);