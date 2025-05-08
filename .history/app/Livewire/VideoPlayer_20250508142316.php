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
       // Veritabanından video verilerini alalım
       $this->videos = News::whereNotNull('video_link')->latest()->get();

       // Veriyi debug edelim
       dd($this->videos);  // Burada videos değişkeninin içeriğini görmek için
   }





    public function render()
{
    return view('livewire.video-player', [
        'videos' => $this->videos,
    ]);
}

}

