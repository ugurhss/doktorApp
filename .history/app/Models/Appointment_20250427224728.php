<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'available_day',
        'from',
        'to',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
