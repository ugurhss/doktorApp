<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{


    public function news()
    {
        return $this->belongsToMany(News::class, 'menu_news');
    }
}
