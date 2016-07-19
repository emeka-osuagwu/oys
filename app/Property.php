<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable=['state','city','title','address','description','price','type'];

    protected $dates=['deleted_at'];

    public function user()
    {
     return $this->belongsTo('App\User');
    }
     
    public function rents()
    {
    	return $this->hasMany('App\Rent');
    }

    
}
