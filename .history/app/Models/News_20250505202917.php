<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    // İzin verilen alanlar (mass assignment için)
    protected $fillable = [
        'image',
        'title',
        'details',
    ];
}
