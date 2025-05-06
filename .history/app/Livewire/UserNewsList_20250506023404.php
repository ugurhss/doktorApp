<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class UserNewsList extends Component
{
    public $news; // Haberler verisi

    public function mount()
    {
        // Haberleri alıyoruz
        $this->news = News::all();

        // Haberlerde null olan verileri kontrol edebilirsiniz
        foreach ($this->news as $new) {
            if (is_null($new)) {
                // Eğer null ise loglama veya hata yönetimi yapılabilir
                Log::warning('Null haber bulundu');
            }
        }
    }


    public function render()
    {

        return view('livewire.user-news-list');
    }
}
