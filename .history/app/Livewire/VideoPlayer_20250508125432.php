<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class VideoPlayer extends Component
{
    public $news;

    public function mount($newsId = null)
    {
        $this->news = News::whereNotNull('video_link')->find($newsId);

        // Eğer video bağlantısı yoksa ya da kayıt bulunamazsa, null yap
        if (!$this->news || !$this->news->video_link) {
            $this->news = null;
        }
    }

    public function render()
    {
        return view('livewire.video-player');
    }
}

