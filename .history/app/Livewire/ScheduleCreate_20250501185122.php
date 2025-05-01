<?php

namespace App\Livewire;

use App\Models\Doctor;
use App\Models\DoctorSchedul;
use Livewire\Component;

class ScheduleCreate extends Component
{

    public $daysOfweek = [
        '0' => 'pazar',
        '1' => 'pazartesi',
        '2' => 'sali',
        '3' => 'carsamba',
        '4' => 'perşembe',
        '5' => 'cuma',
        '6' => 'cumartesi',
    ];

public $available_day = '';
public $from = '';
public $to = '';

public function save(){
    $this->validate([
        'available_day' => 'required',
        'from' => 'required',
        'to' => 'required',
    ]);
    $user_id = auth()->user()->id;
    $doctor_details = Doctor::where('user_id',$user_id)->first();

    $newSchedule = new DoctorSchedul();
    $newSchedule->doctor_id = $doctor_details->id;
    $newSchedule->available_day = $this->available_day;
    $newSchedule->from = $this->from;
    $newSchedule->to = $this->to;
    $newSchedule->save();

    session()->flash('message','basarili şekilde oldu');
    return $this->redirect('/doctor/schedule', navigate: true);

}
    public function render()
    {
        return view('livewire.schedule-create');
    }
}
