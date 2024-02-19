<?php

namespace App\Models\dashboard;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name'];
    public $fillable = ['price', 'description', 'status'];
}
