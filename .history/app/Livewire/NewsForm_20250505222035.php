<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsForm extends Component
{

    public $newsList, $title, $details, $image, $news_id;
    public $updateMode = false;

    public function render()
    {
        $this->newsList = News::latest()->get();
        return view('livewire.news-form');
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->details = '';
        $this->image = null;
        $this->news_id = null;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => json_encode([]), // Varsayılan boş
        ]);

        session()->flash('message', 'News Created Successfully.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $this->news_id = $id;
        $this->title = $news->title;
        $this->details = $news->details;
        $this->image = $news->image;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        if ($this->news_id) {
            $news = News::find($this->news_id);
            $news->update([
                'title' => $this->title,
                'details' => $this->details,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'News Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        News::find($id)->delete();
        session()->flash('message', 'News Deleted Successfully.');
    }
}
