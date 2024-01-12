<?php

// app/Models/Profile.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'birthday', 'avatar', 'about',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
