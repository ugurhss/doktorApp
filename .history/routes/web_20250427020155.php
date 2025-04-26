<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use Pest\Mutate\Mutators\Math\RoundToCeil;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','user'])//->middleware(['auth', 'admin']) // admin middleware'ini ekledik
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

bu deneme
    Route::get('/doctor/dashboard'
    ,[DoctorController::class,'load'])
    ->name('doctor.dashboard')
    ->middleware(['doctor']);

    Route::get('/admin/dashboard'
    ,[AdminController::class,'load'])
    ->name('admin.dashboard')
    ->middleware(['admin']);

RoundToCeil::class('test', 2.3);
Route::get('/test', function () {
    return RoundToCeil::class('test', 2.3);
});
require __DIR__.'/auth.php';
