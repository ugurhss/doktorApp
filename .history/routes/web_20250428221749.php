<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Pest\Mutate\Mutators\Math\RoundToCeil;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','user'])//->middleware(['auth', 'admin']) // admin middleware'ini ekledik
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    Route::get('/filter-by-speciality/{speciality_id}',[UserController::class,'loadDoctorBySpeciality']);
    Route::get('/my-appointments', [UserController::class, 'loadMyAppointments'])->name('my.appointments');
    Route::get('/articles', [UserController::class, 'loadArticles'])->name('articles');
    Route::get('/booking/page/{doctor_id}', [UserController::class, 'loadBookingPage'])
    ->name('booking.page');
    Route::get('/booking/page/all/doktor', [UserController::class, 'loadBookingPage'])
    ->name('booking.page');
 // ********************************************************************************************************

    Route::group(['middleware' => 'doctor'],function(){
        Route::get('/doctor/dashboard'
        ,[DoctorController::class,'load'])
        ->name('doctor.dashboard')
        ->middleware(['doctor']);


        Route::get('/doctor/appointments'
        ,[DoctorController::class,'appointments'])
        ->name('doctor.appointments')
        ->middleware(['doctor']);


        Route::get('/doctor/schedule'
        ,[DoctorController::class,'schedule'])
        ->name('doctor.schedule')
        ->middleware(['doctor']);

        Route::get('/doctor/schedule/create'
        ,[DoctorController::class,'loadScheduleForm'])
        ->name('doctor.schedule.create');

        Route::get('/doctor/schedule/edit/{schedule_id}',
        [DoctorController::class, 'scheduleEdit'])
        ->name('doctor.schedule.edit');



    });


 // ********************************************************************************************************

    Route::group(['middleware' => 'admin'],function(){
        Route::get('/admin/dashboard',[AdminController::class,'load'])
        ->name('admin.dashboard');

        Route::get('/admin/doctors',[AdminController::class,'doctorListing'])
        ->name('admin.doctors');

        Route::get('/admin/doctor/create',[AdminController::class,'loadDoctorForm'])
        ->name('admin.create.doctor');

        // ********************************************************************************************************
        Route::get('/admin/specialities',[AdminController::class,'loadSpecialities'])
        ->name('admin.specialities');
        Route::get('/admin/specialities/create',[AdminController::class,'loadSpecialitiesForm'])
        ->name('admin.specialities.create');

        Route::get('/speciality/edit/{speciality}', [AdminController::class, 'loadEditSpecialityForm'])
        ->name('admin.specialities.edit');
        Route::get('/admin/appointment',[AdminController::class,'allAppointments'])
        ->name('admin-appointments');


    });


require __DIR__.'/auth.php';
