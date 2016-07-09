<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mysaving extends Model
{
    //
    protected $fillable=['balance','target','tenor', 'expiry'];



    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function payments()
    {
    	return $this->hasMany('App\Payment');
    }

    public function cashouts()
    {
    	return $this->hasMany('App\Cashout');
    }






}
