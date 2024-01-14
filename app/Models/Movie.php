<?php

// app/Models/Movie.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description', 'year', 'duration', 'poster', 'slug'
    ];

    public function ratings()
    {
        return $this->hasMany(UserMovieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }
}
