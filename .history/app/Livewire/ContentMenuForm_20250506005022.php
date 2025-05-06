<?php

namespace App\Livewire;

use App\Models\Menu;
use App\Models\News;
use Livewire\Component;

class ContentMenuForm extends Component
{

    public $title;
    public $details;
    public $menus = [];  // Seçilen menüler
    public $image;

    public function render()
    {
        return view('livewire.content-menu-form', [
            'menus' => Menu::all()  // Menüler listelenecek
        ]);
    }

    public function save()
    {
        // Haber kaydetme
        $news = News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => json_encode($this->image),  // Resim JSON formatında saklanacak
        ]);

        // Slug oluşturma
        $news->slug = $news->title;  // Başlıktan slug oluşturulacak
        $news->save();

        // Menülerle ilişki kurma
        $news->menus()->sync($this->menus);

        session()->flash('message', 'İçerik başarıyla kaydedildi!');
    }


}
