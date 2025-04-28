<?php

namespace App\Livewire;

use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleCom extends Component
{
    public function render()
    {
        $user_id = auth()->user()->id;

        return view('livewire.schedule-com',[
            'schedules' => DoctorSchedul::with('doctor')
            ->whereHas('doctor', function ($query) use ($user_id) {
                    $query->where('doctors.user_id', $user_id);
                })->get()


        ]);
    }
}
