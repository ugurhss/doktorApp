<?php

namespace App\Livewire;

use Livewire\Component;

class SpecialistCards extends Component
{
    public function render()
    {
        $specialities = Specialist::all(); // Burada istediğiniz modeli kullanın

        return view('livewire.specialist-cards', [
            'specialities' => $specialities,
        ]);
    }
}
