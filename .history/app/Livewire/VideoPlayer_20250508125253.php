<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class VideoPlayer extends Component
{
    public $news;

    public function mount($newsId = null)
    {
        // Varsayılan olarak 1. haberi al, ya da gönderilen ID'yi kullan
        $this->news = News::find($newsId ?? 1);
    }

    public function render()
    {
        return view('livewire.video-player');
    }
}

