<?php

// app/Models/Movie.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'slug', 'synopsis', 'year', 'poster', 'director',
    ];

    public function genres()
    {
        return $this->hasMany(MovieGenre::class);
    }

    public function ratings()
    {
        return $this->hasMany(UserMovieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }
}
