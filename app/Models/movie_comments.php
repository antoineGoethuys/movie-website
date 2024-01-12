<?php

// app/Models/MovieComment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieComment extends Model
{
    protected $fillable = [
        'movie_id', 'user_id', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
