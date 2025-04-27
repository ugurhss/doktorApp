<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class UserConteoller extends Controller
{
    public function loadDoctorBySpeciality($speciality_id){
        $id = $speciality_id;
        return view('user.doctor-by-speciality',compact('id'));
    }

    public function loadMyAppointments(){
        return view('patient.my-appointments');
    }

    public function loadArticles(){
        return view('patient.articles');
    }
}
