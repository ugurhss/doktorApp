<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class VideoMp extends Component
{


    public $a = [];

    // Veriyi dışarıdan alıyoruz
    public function mount()
    {
        // Haberleri alıyoruz
        $this->a = News::whereNotNull('video_link')->get();
    }

    public function render()
    {
        return view('livewire.video-mp');
    }
}
