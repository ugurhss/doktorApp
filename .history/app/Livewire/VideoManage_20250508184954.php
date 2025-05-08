<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class VideoManage extends Component
{


    public $videos; // Video listesini tutacak değişken
    public $title; // Başlık
    public $details; // Detaylar
    public $video_link; // Video linki
    public $video_id; // Video ID (güncelleme işlemi için)
    public $editing = false; // Düzenleme modunu belirten değişken

    // Component yüklendiğinde çağrılır
    public function mount()
    {
        // 'video_link' alanı olan haberleri getiriyoruz
        $this->videos = News::whereNotNull('video_link')->get();
    }

    // Yeni bir video oluşturmak için
    public function create()
    {
        // Form verilerinin doğrulaması
        $this->validate([
            'title' => 'required|string|max:255', // Başlık zorunlu ve string olmalı
            'details' => 'required|string', // Detaylar zorunlu ve string olmalı
            'video_link' => 'required|url', // Video linki zorunlu ve geçerli bir URL olmalı
        ]);

        // Yeni bir video kaydederiz
        News::create([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link, // Video linkini kaydediyoruz
        ]);

        // Başarılı işlem mesajı
        session()->flash('message', 'Video başarıyla oluşturuldu.');

        // Formu sıfırlıyoruz
        $this->resetForm();

        // Video listesini tekrar yükleyerek güncelliyoruz
        $this->videos = News::whereNotNull('video_link')->get();
    }

    // Bir videoyu düzenlemek için
    public function edit($id)
    {
        // Düzenleme modunu aktif ediyoruz
        $this->editing = true;

        // Düzenlenecek video verisini buluyoruz
        $video = News::find($id);

        // Form alanlarına mevcut verileri yüklüyoruz
        $this->video_id = $video->id;
        $this->title = $video->title;
        $this->details = $video->details;
        $this->video_link = $video->video_link;
    }

    // Var olan bir videoyu güncellemek için
    public function update()
    {
        // Form verilerinin doğrulaması
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'video_link' => 'required|url', // Video linki geçerli bir URL olmalı
        ]);

        // Videoyu güncelliyoruz
        $video = News::find($this->video_id);
        $video->update([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link, // Video linkini güncelliyoruz
        ]);

        // Başarılı işlem mesajı
        session()->flash('message', 'Video başarıyla güncellendi.');

        // Formu sıfırlıyoruz
        $this->resetForm();

        // Video listesini tekrar yükleyerek güncelliyoruz
        $this->videos = News::whereNotNull('video_link')->get();
    }

    // Bir videoyu silmek için
    public function delete($id)
    {
        // Videoyu siliyoruz
        News::find($id)->delete();

        // Başarılı işlem mesajı
        session()->flash('message', 'Video başarıyla silindi.');

        // Video listesini tekrar yükleyerek güncelliyoruz
        $this->videos = News::whereNotNull('video_link')->get();
    }

    // Formu sıfırlayan metot
    public function resetForm()
    {
        $this->title = '';
        $this->details = '';
        $this->video_link = '';
        $this->video_id = null;
        $this->editing = false; // Düzenleme modunu kapatıyoruz
    }

    public function render()
    {
        return view('livewire.video-manage');
    }
}
