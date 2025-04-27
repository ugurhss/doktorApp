<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListing extends Component
{

    public $doktors;
    public function mount()
    {
        $this->doktors = Doctor::with('speciality')->get();

    }
    public function render()
    {
        return view('livewire.doctor-listing',[
            'doctors' => Doctor::all()
        ]);

    }
}
