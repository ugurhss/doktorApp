<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsListing extends Component
{


    public $news;
    public function mount()
    {
        $this->news = News::with('speciality')->get();

    }
    public function delete($id){
        $news = News::find($id);

        $news->delete();

        session()->flash('message','Basarılı bir sekilde silindi');

        return $this->redirect('/admin/news', navigate:true);
    }
    public function featured($id){
        $news = News::find($id);

        if ($news->is_featured == 1) {
            $news->update([
                'is_featured' => 0
            ]);
        }else{

            $news->update([
                'is_featured' => 1
            ]);
        }
    }
    public function render()
    {
        return view('livewire.news-listing');
    }
}
