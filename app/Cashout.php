<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashout extends Model
{
    //
    protected $fillable=['paydate','amount','status', 'user_id', 'mysaving_id'];



    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function mysaving()
    {
    	return $this->belongsTo('App\Mysaving');
    }







}
