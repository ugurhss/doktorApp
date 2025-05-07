<?php

namespace App\Livewire;

use App\Models\Menu;
use App\Models\News;
use Livewire\Component;

class UserNewsList extends Component
{
    public $menuId;
    public $newsItems;

    public function mount($menuId = null)
    {
        $this->menuId = $menuId;

        if ($menuId) {
            $menu = Menu::with('news')->find($menuId);
            $this->newsItems = $menu ? $menu->news : collect();
        } else {
            $this->newsItems = News::all();
        }
    }
    public function render()
    {

        return view('livewire.user-news-list');
    }
}
