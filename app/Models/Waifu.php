<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waifu extends Model
{
    protected $table = 'waifus';
    protected $fillable = [
        'name',
        'anime',
        'picture',
        'grade'
    ];
}
