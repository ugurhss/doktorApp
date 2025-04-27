<?php

namespace App\Livewire;

use App\Models\Specialist;
use Livewire\Component;

class SpecialitiesComponent extends Component
{
    public function render()

    {
        return view('livewire.specialities-component',[
        'specialities' => Specialist::all()
    ]);
    }
}
