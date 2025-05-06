<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class UserNewsDetail extends Component
{

    public $news; // Tek haber verisi
    public $slug; // Slug bilgisi

    public function mount($slug)
    {
        // Sluga göre haber verisini alıyoruz
        $this->news = News::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user-news-detail');
    }
}
