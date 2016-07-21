<?php 

namespace App\Repositories;

use Validator;

class ValidationRepository 
{
    public function createPropertyRequest($data)
    {   
        $validator = Validator::make($data, [
            'email'         => 'required|unique:users|email',
            'password'      => 'required|max:20|min:4',
        ]);
        return $validator;
    }
}
