<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'role',
        'email', 
        'city', 
        'phone',
        'password',
        'last_name', 
        'date_birth',
        'description',
        'first_name', 
        'access_level',
        'profile_status',
    ];

    protected $hidden = [
        'oauth',
        'password',
        'remember_token', 
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function rents()
    {
       return $this->hasMany('App\Rent');
    }

    public function mysaving()
    {
       return $this->hasOne('App\Mysaving');
    }

     public function properties()
     {
        return $this->hasMany('App\Property');
     }

     public function payments()
     {
        return $this->hasMany('App\Payment');
     }

     public function earnings()
     {
        return $this->hasMany('App\Earning');
     }

     public function cashouts()
     {
        return $this->hasMany('App\Cashout');
     }



}
