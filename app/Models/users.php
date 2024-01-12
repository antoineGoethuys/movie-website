<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'email', 'password', ' 0',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function movieRatings()
    {
        return $this->hasMany(UserMovieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }
}
