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
        'image' => 'nullable|string',
    ];
    public function storeOrUpdate()
    {
        $this->validate();

        News::updateOrCreate(
            ['id' => $this->newsId],
            [
                'title' => $this->title,
                'details' => $this->details,
                'image' => json_encode([$this->image]),
            ]
        );

        session()->flash('message', $this->newsId ? 'Haber güncellendi.' : 'Haber eklendi.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $this->newsId = $news->id;
        $this->title = $news->title;
        $this->details = $news->details;
        $this->image = $news->image[0] ?? '';
    }

    public function delete($id)
    {
        News::find($id)?->delete();
        session()->flash('message', 'Haber silindi.');
    }

    public function resetForm()
    {
        $this->title = '';
        $this->details = '';
        $this->image = '';
        $this->newsId = null;
    }

    public function render()
    {
        return view('livewire.news-form');
    }
}
