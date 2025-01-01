<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title', 'release_date',
        'duration', 'description',
        'director',
        'actor',
        'genre',
        'price',
        'theatre_id',
        'image',
    ];
}
