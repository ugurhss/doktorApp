<?php

namespace App\Livewire;

use Livewire\Component;

class BookingComponent extends Component
{
    public function render()
    {
        return view('livewire.booking-component', [
            'availableDates' => $this->availableDates,
        ]);
    }
}
