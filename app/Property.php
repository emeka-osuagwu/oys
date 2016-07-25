<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "properties";
    

    protected $fillable = [
        'type', 
        'city',
        'price',
        'state',
        'title',
        'user_id',
        'address',
        'description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
     return $this->belongsTo('App\User');
    }
     
    public function rents()
    {
    	return $this->hasMany('App\Rent');
    }

    
}
