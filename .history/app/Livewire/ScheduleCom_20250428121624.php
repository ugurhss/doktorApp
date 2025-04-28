<?php

namespace App\Livewire;

use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleCom extends Component
{

    public $daysOfweek;

    public function mount(){
        $this->daysOfweek = [
            '0' => 'Pazar',
            '1' => 'Pazartesi',
            '2' => 'Salı',
            '3' => 'Carsamba',
            '4' => 'Perşembe',
            '5' => 'Cuma',
            '6' => 'Cumartesi',
        ];

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
