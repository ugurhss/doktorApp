<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadDoctorBySpeciality($speciality_id){
        $id = $speciality_id;
        return view('user.doctor-by-speciality',compact('id'));
    }

    public function loadMyAppointments(){
        return view('user.my-appointments');
    }

    public function loadArticles(){
        return view('user.articles');
    }
    public function loadBookingPage($id){
        $doctor = Doctor::with('speciality','doctorUser')->where('id',$id)->first();
        return view('patient.booking-page',compact('doctor'));
    }
}
