<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsUserCreate extends Component
{
    public function render()
    {
        return view('livewire.news-user-create');
    }

    public function create()
{
    $this->validate([
        'title' => 'required',
        'details' => 'required|string',
    ]);

    News::create([
        'title' => $this->title,
        'details' => $this->details,
    ]);

    session()->flash('message', 'Haber başarıyla eklendi.');
    $this->reset();
}
}
