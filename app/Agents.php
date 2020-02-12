<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    protected $fillable =  [
        'firstname',
        'lastname',
        'phone',
        'email',
        'city'
    ];
}
