<?php

namespace App\Livewire;

use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleEdit extends Component
{


    public $daysOfweek = [
        '0' => 'Pazar',
        '1' => 'Pazartesi',
        '2' => 'Salı',
        '3' => 'Carsamba',
        '4' => 'Persembe',
        '5' => 'Cuma',
        '6' => 'Cumaertesi',
    ];

public $schedules;
public $available_day;
public $from;
public $to;

public function update(){
    $this->validate([
        'available_day' => 'required',
        'from' => 'required',
        'to' => 'required',
    ]);

    DoctorSchedul::where('id',$this->schedules->id)->update([
       'available_day' => $this->available_day,
        'from' => $this->from,
        'to' => $this->to,
    ]);

    session()->flash('message','Güncellendi');

    return $this->redirect('/doctor/schedules', navigate: true);
}
public function mount($schedule_id){
    $this->schedules = DoctorSchedul::find($schedule_id);

    $this->from = $this->schedules->from;
    $this->to = $this->schedules->to;
}

    public function render()
    {
        return view('livewire.schedule-edit');
    }
}
