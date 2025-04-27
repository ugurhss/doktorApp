<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use HasFactory;


    protected $fillable = [
        'speciality_name',
    ];

    // public function doctors()
    // {
    //     return $this->hasMany(Doctor::class);
    // }
}
