<?php

namespace App\Livewire;

use Livewire\Component;

class SpecialitiesComponent extends Component
{
    public function render()

    {
        return view('livewire.specialities-component',[
        'specialities' => Specialities::all()
    ]);
    }
}
