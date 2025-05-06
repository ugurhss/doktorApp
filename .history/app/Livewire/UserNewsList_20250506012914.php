<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class UserNewsList extends Component
{
    public function render()
    {
        $newsList = News::latest()->get();
        return view('livewire.user-news-list', [
            'newsList' => $newsList
        ]);
    }
}
