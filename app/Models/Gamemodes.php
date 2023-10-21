<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamemodes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'map',
        'max-players',
        'rotative'
    ];
}
