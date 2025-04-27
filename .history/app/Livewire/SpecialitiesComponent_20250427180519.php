<?php

namespace App\Livewire;

use App\Models\Specialist;
use Livewire\Component;

class SpecialitiesComponent extends Component
{


    public function delete($speciality_id){

        $speciality = Specialist::find($speciality_id);

        $speciality->delete();

        session()->flash('message','speciality deleted successfully');

        return $this->redirect('/admin/specialities', navigate: true);
    }
    public function render()

    {
        return view('livewire.specialities-component',[
        'specialities' => Specialist::all()
    ]);
    }
}
