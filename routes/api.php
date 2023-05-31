<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AttendanceController

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout',[AuthController::class,'logout']);
    Route::get('/courses',[AttendanceController::class,'courses']);
    Route::get('/apprentices/{id}',[AttendanceController::class,'apprentices']);
});
