<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class VideoPlayer extends Component
{

    public $a = [];

    // Veriyi dışarıdan alıyoruz
    public function mount()
    {
        // Haberleri alıyoruz
        $this->newsItems = News::whereNotNull('video_link')->get();
    }


    public function render()
    {
        return view('livewire.video-player', [
            'newsItems' => $this->newsItems,
        ]);    }
}

