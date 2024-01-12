<?php

// app/Models/MovieGenre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    protected $fillable = [
        'movie_id', 'genre',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
