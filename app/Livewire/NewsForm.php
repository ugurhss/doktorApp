<?php

namespace App\Livewire;

use App\Models\Menu;
use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class NewsForm extends Component
{
    use WithFileUploads;

    public $title, $details, $news_id, $updateMode = false;
    public $image = [];
    public $newsList = [];
    public $menu_ids = []; // Çoklu menü seçimi için

    public $allMenus = [];

    public function mount()
    {
        $this->allMenus = Menu::all();
    }

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
            'menu_ids' => 'array|exists:menus,id',
        ]);

        $paths = [];
        foreach ($this->image as $img) {
            $paths[] = $img->store('news-images', 'public');
        }

        $news = News::create([
            'title' => $this->title,
            'details' => $this->details,
            'image' => json_encode($paths),
        ]);

        $news->menus()->attach($this->menu_ids);

        session()->flash('message', 'Haber başarıyla eklendi.');
        $this->reset(['title', 'details', 'image', 'menu_ids']);
    }

    public function edit($id)
    {
        // Haber kaydını bul
        $news = News::findOrFail($id);

        // Haber başlık ve detaylarını form alanlarına atamak
        $this->news_id = $news->id;
        $this->title = $news->title;
        $this->details = $news->details;

        // Menülerle olan ilişkisini almak
        $this->menu_ids = $news->menus()->pluck('menus.id')->toArray();  // Burada 'menus.id' belirtiyoruz.

        // Güncelleme modunu aktif hale getirme
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'details' => 'required',
            'menu_ids' => 'array|exists:menus,id',
        ]);

        $news = News::findOrFail($this->news_id);
        $news->update([
            'title' => $this->title,
            'details' => $this->details,
        ]);

        $news->menus()->sync($this->menu_ids);

        session()->flash('message', 'Haber güncellendi.');
        $this->reset(['title', 'details', 'image', 'menu_ids', 'updateMode']);
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);

        $news->menus()->detach();

        if ($news->image) {
            foreach (json_decode($news->image) as $img) {
                Storage::disk('public')->delete($img);
            }
        }

        $news->delete();
        session()->flash('message', 'Haber silindi.');
    }
}
