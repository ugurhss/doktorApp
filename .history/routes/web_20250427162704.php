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

        Route::get('/admin/doctor/create',[AdminController::class,'loadDoctorForm'])
        ->name('admin.create.doctor');
        Route::get('/admin/specialities',[AdminController::class,'loadSpecialities'])
        ->name('admin.specialities');
        Route::get('/admin/specialities/create',[AdminController::class,'loadSpecialitiesForm'])
        ->name('admin.specialities.create');

        Route::get('/speciality/edit/{speciality}', [AdminController::class, 'loadEditSpecialityForm'])
        ->name('admin.specialities.edit');



    });


require __DIR__.'/auth.php';
