<?php

namespace App\Livewire;

use Livewire\Component;

class NewsForm extends Component
{

    public $news, $title, $details, $image;

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
