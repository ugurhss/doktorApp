<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class VideoPlayer extends Component
{
    public $news;

    public function mount($newsId = null)
    {
        $this->news = News::whereNotNull('video_link')->find($newsId);

        if (!$this->news) {
            return Redirect::route('404'); // ya da 404
        }
    }

    public function render()
    {
        return view('livewire.video-player');
    }
}

