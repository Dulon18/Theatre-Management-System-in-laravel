<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'total_seats', 'layout'];

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
