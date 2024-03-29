<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','name','mobile','address','cart'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
