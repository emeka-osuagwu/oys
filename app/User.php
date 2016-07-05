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
        'name', 'email', 'password','role','phone','date_birth'
    ];
    protected $date=['deleted_at','date_birth'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
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
