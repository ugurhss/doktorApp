<?php

namespace App\Livewire;

use Livewire\Component;

class NewsForm extends Component
{

    public $news;
    public $title, $details, $image;
    public $newsId = null;

    protected $rules = [
        'title' => 'required|string|max:255',
        'details' => 'required|string',
        'image' => 'nullable',
    ];

    public function render()
    {
        return view('livewire.news-form');
    }
}
