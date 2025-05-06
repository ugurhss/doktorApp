<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsForm extends Component
{
    use WithFileUploads;

    public $title, $details, $news_id, $updateMode = false;
    public $image = [];
    public $newsList = [];

    public function render()
    {
        $this->newsList = News::latest()->get();
        return view('livewire.news-form');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'details' => 'required',
            'image.*' => 'image|max:2048',
        ]);

        $paths = [];
        foreach ($this->image as $img) {
            $paths[] = $img->store('news-images', 'public');
        }

        News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => json_encode($paths),
        ]);

        session()->flash('message', 'Haber başarıyla eklendi.');
        $this->reset(['title', 'details', 'image']);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $this->news_id = $news->id;
        $this->title = $news->title;
        $this->details = $news->details;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        $news = News::findOrFail($this->news_id);
        $news->update([
            'title' => $this->title,
            'details' => $this->details,
        ]);

        session()->flash('message', 'Haber güncellendi.');
        $this->reset(['title', 'details', 'image', 'updateMode']);
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        if ($news->image) {
            foreach (json_decode($news->image) as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $news->delete();
        session()->flash('message', 'Haber silindi.');
    }
}
