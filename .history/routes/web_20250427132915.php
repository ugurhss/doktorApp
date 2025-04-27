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


    Route::get('/doctor/dashboard'
    ,[DoctorController::class,'load'])
    ->name('doctor.dashboard')
    ->middleware(['doctor']);

    Route::group(['middleware' => 'admin'],function(){
        Route::get('/admin/dashboard',[AdminController::class,'load'])
        ->name('admin.dashboard');

        Route::get('/admin/doctors',[AdminController::class,'doctorListing'])
        ->name('admin.doctors');

        Route::get('/admin/create/doctor',[AdminController::class,'loadDoctorForm'])
        ->name('admin.create.doctor');
    });


require __DIR__.'/auth.php';
