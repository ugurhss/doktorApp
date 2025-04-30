<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function load()
    {
        return view('doctor.dashboard');
    }

    public function appointments()
    {
        return view('doctor.appointments');
    }
    public function schedule()
    {
        return view('doctor.schedule');
    }
    public function loadScheduleForm()
    {
        return view('doctor.schedule-create');
    }

    public function scheduleEdit($schedule_id)
    {
        $id = $schedule_id;

        return view('doctor.schedule-edit',compact('id'));
    }

    public function reschedulingForm($id){
        $appointment_id = $id;
        return view('doctor.reschedule-form');
    }
}
