<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'is_admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function ratings()
    {
        return $this->hasMany(UserMovieRating::class);
    }

    public function comments()
    {
        return $this->hasMany(MovieComment::class);
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
