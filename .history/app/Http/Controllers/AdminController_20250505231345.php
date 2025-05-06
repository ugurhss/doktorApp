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
        return view('admin.specialities');
    }

    public function loadSpecialitiesForm(){
        return view('admin.specialities-form');
    }
    public function loadEditSpecialityForm($speciality_id){
        return view('admin.edit-speciality', ['id' => $speciality_id]);
    }

    public function allAppointments(){

        return view('admin.admin-appointments');
    }

    public function reschedule(){

        return view('admin.reschedule');

    }

    public function rescheduleForm($id){
        $appointment_id = $id;
        return view('admin.reschedule-form',compact('appointment_id'));
    }
    public function newsform(){

        return view('admin.news-form');
    }

}
