<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorie extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function employee()
    {
        return $this->belongsTo(Laboratory_employee::class, 'employee_id')
            ->withDefault(['name' => 'noEmployee']);
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
