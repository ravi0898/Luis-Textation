<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
       'title', 'msg', 'sender', 'receiver','ticket_id'
    ];
}
