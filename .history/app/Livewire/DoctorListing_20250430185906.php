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

        session()->flash('message','Basarılı bir sekilde silindi');

        return $this->redirect('/admin/doctors', navigate:true);
    }
    public function featured($id){
        $doctor = Doctor::find($id);

        if ($doctor->is_featured == 1) {
            $doctor->update([
                'is_featured' => 0
            ]);
        }else{

            $doctor->update([
                'is_featured' => 1
            ]);
        }
    }

    public function render()
    {
        return view('livewire.doctor-listing',[
            'doctors' => Doctor::all()
        ]);

    }
}
