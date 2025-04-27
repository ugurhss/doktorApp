<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function load()
    {
        return view('admin.dashboard');
    }

    public function doctorListing()
    {
        return view('admin.doctor-listing');
    }

    public function loadDoctorForm(){
        return view('admin.doctor-form');
    }

    public function loadSpecialities(){
        return view('livewire.specialist-cards');
    }
}
