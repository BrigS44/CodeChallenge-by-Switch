<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password', 'index_number','phone','faculty','study',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPassword($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
