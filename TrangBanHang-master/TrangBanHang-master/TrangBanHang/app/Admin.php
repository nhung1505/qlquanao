<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    protected $fillable = [
        'user', 'password', 'email',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
