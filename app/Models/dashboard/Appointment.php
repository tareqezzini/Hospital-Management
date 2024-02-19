<?php

namespace App\Models\dashboard;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    use HasFactory;
    public $fillable = ['name', 'appointment', 'type', 'email', 'phone', 'doctor_id', 'section_id', 'notes'];


    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function doctor()
    {
        return $this->belongsTo(doctor::class, 'doctor_id');
    }
}
