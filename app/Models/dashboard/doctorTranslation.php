<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'appointments'];
    public $timestamps = false;
}