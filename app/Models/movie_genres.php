<?php
// app/Models/MovieGenre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id', 'genre',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
