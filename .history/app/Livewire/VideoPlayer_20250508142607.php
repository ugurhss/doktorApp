<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class VideoPlayer extends Component
{

    public $videos = [];

    // Veriyi dışarıdan alıyoruz
    public function mount($videos)
    {
        $this->videos = $videos;
    }

    public function render()
    {
        return view('livewire.video-player');
    }
}

