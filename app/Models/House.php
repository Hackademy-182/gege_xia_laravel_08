<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['title', 'price', 'floor', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
