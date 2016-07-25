<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'user_id'
        'property_id'
        'description'
        'rent_paid'
        'actual_rent'
        'tenor'
        'expiry'
        'status'
        'rent_paid',
        'actual_rent',
    ];

    protected $date = [
        'deleted_at',
        'expiry'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function payments()
    {
    	return $this->hasMany('App\Payment');
    }

    public function earnings()
    {
    	return $this->hasMany('App\Earning');
    }

    public function property()
    {
    	return $this->belongsTo('App\Property');
    }




}
