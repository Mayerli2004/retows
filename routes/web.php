<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ApprenticeController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::get('/apprentices',[ApprenticeController::class,'apprentices']);
