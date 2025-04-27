<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class UserConteoller extends Controller
{
    public function loadDoctorBySpeciality($specialityId)
    {
        // İlgili uzmanlık alanına göre doktorları yükleyin
        $doctors = Doctor::where('speciality_id', $specialityId)->get();

        return view('user.doctor-by-speciality', [
            'doctors' => $doctors,
        ]);
    }
}
