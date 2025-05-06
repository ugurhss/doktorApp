<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class UserNewsDetail extends Component
{

    public $slug;
    public $news;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->news = News::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user-news-detail');
    }
}
