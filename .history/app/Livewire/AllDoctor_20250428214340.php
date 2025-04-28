<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class AllDoctor extends Component
{
    public function render()
    {
        return view('livewire.all-doctor',[
    'all_doctors'=>Doctor::with(['speciality', 'doctorUser'])->get()
]);
    }
}
