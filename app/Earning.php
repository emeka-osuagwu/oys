<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Earning extends Model
{
    //
    use SoftDeletes;
    
    protected $fillable=['amount','rent_id'];

    protected $dates = ['deleted_at'];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }


    public function rent()
    {
    	return $this->belongsTo('App\Rent');
    }
}
