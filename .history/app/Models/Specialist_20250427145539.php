<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'speciality_name',
    ];

    // public function doctors()
    // {
    //     return $this->hasMany(Doctor::class);
    // }
}
