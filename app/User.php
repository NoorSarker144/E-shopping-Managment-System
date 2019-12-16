<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    protected  $table = 'users';
    protected $guard = 'user';
    protected $fillable = ['email','password','remember_token'];


    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
