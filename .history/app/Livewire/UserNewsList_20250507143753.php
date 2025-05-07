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
            // Menü ID'si verildiyse, menüye ait haberleri alıyoruz
            $menu = Menu::with('news')->find($menuId);
            $this->newsItems = $menu ? $menu->news : collect();
        } else {
            // Menü ID'si verilmediyse, tüm haberleri alıyoruz
            $this->newsItems = News::all();
        }
    }
    public function render()
    {

        return view('livewire.user-news-list');
    }
}
