<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ray extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(doctor::class, 'doctor_id');
    }
    public function employee()
    {
        return $this->belongsTo(RayEmployee::class, 'employee_id');
    }
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
