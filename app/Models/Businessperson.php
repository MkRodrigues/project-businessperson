<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Businessperson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'state',
        'city',
        'entrepreneur',
    ];
}
