<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class UserNewsList extends Component
{
    public $news; // Haberler verisi

    public function mount()
    {
        // Haberleri alıyoruz
        $this->news = News::all();
    }

    public function render()
    {
        return view('livewire.user-news-list');
    }
}
