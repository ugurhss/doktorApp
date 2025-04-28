<?php

namespace App\Livewire;

use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleEdit extends Component
{


    public $daysOfweek = [
        '0' => 'Sunday',
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
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

    session()->flash('message','schedule updated');

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
