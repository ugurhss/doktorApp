<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [

        'name'
    ];

    public function news()
    {
        return $this->belongsToMany(News::class, 'menu_news');
    }
}
