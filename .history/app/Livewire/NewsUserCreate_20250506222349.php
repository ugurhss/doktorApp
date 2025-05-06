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
    public $image;

    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'image' => 'nullable|image|max:1024',
        ]);

        $imagePath = $this->image ? $this->image->store('news_images', 'public') : null;

        News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Haber başarıyla eklendi.');
        $this->reset();  // inputları temizle
    }

    public function render()
    {
        return view('livewire.news-user-create');
    }
}
