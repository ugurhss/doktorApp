<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class UserNewsList extends Component
{
    public $newsItems; // Haberler verisi

    public function mount()
    {
        // Haberleri alıyoruz
        $this->newsItems = News::all();
    }

    public function render()
    {

        return view('livewire.user-news-list');
    }
}
