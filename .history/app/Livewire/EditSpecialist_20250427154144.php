<?php

namespace App\Livewire;

use App\Models\Specialist;
use Livewire\Component;

class EditSpecialist extends Component
{

    public $speciality;
    public $name;

    public function mount($speciality_id){
        $this->speciality = Specialist::find($speciality_id);

        $this->name = $this->speciality->speciality_name;
    }

    public function update(){
        $this->validate(['name' => 'required']);
        // update
        $update = Specialist::find($this->speciality->id);
        $update->update([
            'speciality_name' => $this->name
        ]);

        session()->flash('message','speciality updated successfully');
        return $this->redirect('/admin/specialities', navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-specialist');
    }
}
