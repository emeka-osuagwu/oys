<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable=['amount','status','paydate'];

    protected $date=['deleted_at','paydate'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function mysaving()
    {
    	return $this->belongsTo('App\Mysaving');
    }

    public function rent()
    {
    	return $this->belongsTo('App\Rent');
    }
}
