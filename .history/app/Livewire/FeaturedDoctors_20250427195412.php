<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class FeaturedDoctors extends Component
{
    public $speciality_id;

    public function render()
    {
        $doctors = Doctor::where('speciality_id', $this->speciality_id)->get();

        return view('livewire.featured-doctors', [
            'doctors' => $doctors,
        ]);
    }
}
