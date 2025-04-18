<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration', 'language', 'genre', 'poster_url', 'type'];

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
