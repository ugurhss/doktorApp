<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory,Sluggable;

    // İzin verilen alanlar (mass assignment için)
    protected $fillable = [
        'image',
        'title',
        'details',
        'slug'
    ];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title); // Başlığa göre slug oluşturuyor
        });
    }



    public function newsUser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_news');
    }
}
