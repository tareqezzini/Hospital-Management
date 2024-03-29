<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    //Get the parent imageable model.
    public function imageable()
    {
        return $this->morphTo();
    }
}
