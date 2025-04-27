<?php

namespace App\Livewire;

use App\Models\Specialist;
use Livewire\Component;

class SpecialitiesComponent extends Component
{


    public function delete($speciality_id){

        $speciality = Specialist::find($speciality_id);// burada id'yi alıyoruz ve silme işlemi yapıyoruz yani şu şu id al

        $speciality->delete();//ve sonra ise sil

        session()->flash('message','silindi');

        return $this->redirect('/admin/specialities', navigate: true);
    }
    public function render()

    {
        return view('livewire.specialities-component',[
        'specialities' => Specialist::all()
    ]);
    }
}
