<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory,Sluggable;

    // İzin verilen alanlar (mass assignment için)
    protected $fillable = [
        'image',
        'title',
        'details',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'  // Slug, başlıktan oluşturulacak
            ]
        ];
    }



    public function newsUser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_news');
    }
}
