<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'hospital_name',
        'email',
        'bio',
        'speciality_id',
        'password',
        'twitter',
        'instagram',
        'experience'
    ];

    public function speciality()
    {
        return $this->belongsTo(Specialist::class, 'speciality_id');
    }
}
