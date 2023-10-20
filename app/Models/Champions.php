<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    protected $fillable = [
        'name',
        'role',
        'difficulty',
        'release_date',
    ];
}
