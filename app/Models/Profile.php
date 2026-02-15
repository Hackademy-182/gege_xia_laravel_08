<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'phone',
        'email_alt',
        'instagram',
        'facebook',
        'bio',
        'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
