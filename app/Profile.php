<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = [
        'user_id',
        'surname',
        'nick',
        'phone',
        'about',
        'country',
        'city',
        'picture',
    ];
}
