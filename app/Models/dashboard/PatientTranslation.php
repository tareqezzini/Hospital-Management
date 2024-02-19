<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'Address'];
    public $timestamps = false;
}
