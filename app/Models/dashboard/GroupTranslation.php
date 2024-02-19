<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'notes'];
    public $timestamps = false;
}
