<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'hospital_name'=>'required',
        'email',
        'bio'=>'required',
        'speciality_id'=>'required',
        'password',
        'twitter'=>'string',
        'instagram'=>'string',
        'experience'=>'required',
    ];

    public function speciality()
    {
        return $this->belongsTo(Specialist::class, 'speciality_id');
    }
}
