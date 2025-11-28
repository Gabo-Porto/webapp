<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'area',
        'ramal',
        'andar',
        'email'
    ];
}
