<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    protected $fillable =[
    'theatre_name',
    'city',
    'no_of_screens',
    'movie_list'];

}
