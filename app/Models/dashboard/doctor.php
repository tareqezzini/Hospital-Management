<?php

namespace App\Models\dashboard;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class doctor extends Authenticatable
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['name', 'appointments'];
    public $fillable = ['email', 'email_verified_at', 'password', 'phone', 'price', 'name', 'appointments', 'status'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_doctor');
    }
}
