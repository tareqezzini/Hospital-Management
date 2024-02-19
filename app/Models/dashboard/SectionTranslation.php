<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{
    protected $fillable = ['name', 'description'];
    public $timestamps = false;
    use HasFactory;
}
