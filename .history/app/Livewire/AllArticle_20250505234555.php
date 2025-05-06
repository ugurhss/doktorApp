<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class AllArticle extends Component
{
    public function render()
    {
        $newsItems = News::all();
        return view('livewire.all-article', compact('newsItems'));
    }
}
