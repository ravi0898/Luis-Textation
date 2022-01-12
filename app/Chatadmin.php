<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatadmin extends Model
{
    protected $fillable = [
        'user_id', 'images', 'sender'
    ];
}
