<?php

namespace App\Livewire;

use App\Models\Specialist;
use Livewire\Component;

class SpecialistForm extends Component
{

    public $name = '';

    public function save(){

        $this->validate([
            'name' => 'required'
        ]);

        // burada name alanını kontrol ediyoruz ve boş olmamasını sağlıyoruz
        $save = new Specialist();//modele yeni bir nesne oluşturuyoruz
        $save->speciality_name = $this->name;// burada name alanını kaydediyoruz
        $save->save();// burada veritabanına kaydediyoruz

        session()->flash('message','Harika');
        return $this->redirect('/admin/specialities',navigate: true);
    }
    public function render()
    {
        return view('livewire.specialist-form');
    }
}
