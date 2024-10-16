<?php

use Illuminate\Support\Facades\Route;
use Laratrust\Http\Controllers\RolesAssignmentController;

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/permisos', [RolesAssignmentController::class, 'index'])->middleware('role:administrador-sistema','auth', 'verified');
