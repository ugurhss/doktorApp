<?php

namespace App\Livewire;

use Livewire\Component;

class DoctorListing extends Component
{
    public function render()
    {
        return view('livewire.doctor-listing'),
        [
            'doctors' => \App\Models\Doctor::all()
        ];
    }
}
