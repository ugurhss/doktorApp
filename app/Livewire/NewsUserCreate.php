<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class NewsUserCreate extends Component
{


    use WithFileUploads;

    public $title;
    public $details;
    public $image;  // Resim alanı

    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'image' => 'nullable|image|max:1024',  // Resim yükleme doğrulaması
        ]);

        // Resim yükleme
        if ($this->image) {
            $imagePath = $this->image->store('news_images', 'public');
        }

       News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => $imagePath ?? null,  // Resim yolunu kaydet
        ]);

        session()->flash('message', 'Haber başarıyla eklendi.');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.news-user-create');
    }

}
