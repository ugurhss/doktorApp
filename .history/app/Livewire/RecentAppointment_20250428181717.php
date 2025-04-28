<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Doctor;
use Livewire\Component;

class RecentAppointment extends Component
{
    public function render()
    {

        if(auth()->user() && auth()->user()->role == 1){
            $user_doctor = auth()->user();
            $doctor = Doctor::where('user_id',$user_doctor->id)->first();

            return view('livewire.recent-appointments',[
                'recent_appointments' => Appointment::with('patient','doctor')
                ->where('doctor_id',$doctor->id)
                ->get()
            ]);
        }

        if(auth()->user() && auth()->user()->role == 0){
            $patient = auth()->user();

            return view('livewire.recent-appointments',[
                'recent_appointments' => Appointment::with('patient','doctor')
                ->where('patient_id',$patient->id)
                ->limit(10)
                ->get()
            ]);
        }
        return view('livewire.recent-appointments',[
            'recent_appointments' => Appointment::with('patient','doctor')
            ->limit(10)
          ->get()
        ]);
    }}
