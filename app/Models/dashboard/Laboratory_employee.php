<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Laboratory_employee extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password',];
}
