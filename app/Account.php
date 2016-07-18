<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable=['bank','account_name','account_number', 'user_id'];



    public function user()
    {
    	return $this->belongsTo('App\User');
    }








}
