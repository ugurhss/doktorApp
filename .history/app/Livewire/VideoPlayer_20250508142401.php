<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class VideoPlayer extends Component
{
    public $news;

   public $videos = [];

   public function mount()
   {
       $this->videos = News::whereNotNull('video_link')->latest()->get();
   }




    public function render()
{
    return view('livewire.video-player', [
        'videos' => $this->videos,
    ]);
}

}

