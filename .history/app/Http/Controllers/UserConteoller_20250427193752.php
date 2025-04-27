<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConteoller extends Controller
{
    public function loadDoctorBySpeciality($specialityId)
    {
        // İlgili uzmanlık alanına göre doktorları yükleyin
        $doctors = \App\Models\Doctor::where('speciality_id', $specialityId)->get();

        return response()->json($doctors);
    }
}
