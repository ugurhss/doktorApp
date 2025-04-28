<?php

namespace App\Livewire;

use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleCom extends Component
{
    public function render()
    {
        return view('livewire.schedule-com',[
            'schedules' => DoctorSchedule::with('doctor')
            ->whereHas('doctor', function ($query) use ($user_id) {
                    $query->where('doctors.user_id', $user_id);
                })->get()


        ]);
    }
}
