<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'client_name', 'company_name', 'email', 'mobile_no', 'priority', 'status'
    ];
}



// https://hackthestuff.com/article/laravel-multiple-authentication-system-using-different-models