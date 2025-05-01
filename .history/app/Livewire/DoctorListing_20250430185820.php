<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListing extends Component
{

    public $doktors;
    public function mount()
    {
        $this->doktors = Doctor::with('speciality')->get();

    }
    public function delete($id){
        $doctor = Doctor::find($id);

        $doctor->delete();

        session()->flash('message','doctor deleted successfully');

        return $this->redirect('/admin/doctors', navigate:true);
    }
    public function render()
    {
        return view('livewire.doctor-listing',[
            'doctors' => Doctor::all()
        ]);

    }
}
