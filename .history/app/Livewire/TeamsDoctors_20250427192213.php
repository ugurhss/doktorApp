<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class TeamsDoctors extends Component
{


    public function render()
    {
        $doctors = Doctor::all();


        return view('livewire.teams-doctors',[
            'doctors' => $doctors
        ]);
    }
}
