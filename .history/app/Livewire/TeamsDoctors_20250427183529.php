<?php

namespace App\Livewire;

use Livewire\Component;

class TeamsDoctors extends Component
{

    public $doctors;

    public function mount($speciality_id){
        if ($speciality_id != 0) {
            $this->featuredDoctors = Doctor::with(['speciality', 'doctorUser'])
                ->whereHas('speciality', function ($query) use ($speciality_id) {
                    $query->where('specialities.id', $speciality_id);
                })
                ->get();
        } else {
            $this->featuredDoctors = Doctor::with(['speciality', 'doctorUser'])->get();
        }

    public function render()
    {
        return view('livewire.teams-doctors');
    }
}
