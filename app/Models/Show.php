<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $fillable = ['movie_id', 'screen_id', 'start_time', 'end_time', 'price'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
