<?php 


namespace App\Repositories;

use App\User;

class UserRepository 
{

    public function createUser($data)
    {
        $user = User::create($data);
    }

    public function getUserWhere($field, $value)
    {
        return User::where($field, $value)->get();
    }
    
    public function updateUser($data)
    {
        $update = [

            "email"             => $data['email'],
            "city"              => $data['city'],
            "phone"             => $data['phone'],
            "last_name"         => $data['last_name'],
            "first_name"        => $data['first_name'],
            "description"       => $data['description'],
            "profile_status"    => 1,
        ];

        User::where('id', $data['user_id'])->update($update);
    }

    public function getAllUser()
    {
        return User::all();
    }

    public function addUser($data)
    {
        $create = [
            "role"      => $data['role'],
            "email"     => $data['email'],
            "password"  => $data['tmp_passsword'],
        ];
        
        User::create($create);
    }

    public function findByUserNameOrCreate($userData) {
        $user = User::where('email', '=', $userData->email)->first();
        if(!$user) {
            $user = User::create([
                'provider'    => \Session::get('driver'),
                'provider_id' => $userData->id,
                'name' => $userData->name,
                'email' => $userData->email,

            ]);
        }

        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }

    public function checkIfUserNeedsUpdating($userData, $user) {

        $socialData = [
            'provider'    => \Session::get('driver'),
            'provider_id' => $userData->id,
            'email' => $userData->email,
            'name' => $userData->name,
            
        ];
        $dbData = [
            'provider'    => $user->provider,
            'provider_id' => $user->provider_id,
            'email' => $user->email,
            'name' => $user->name,

        ];

        if (array_diff($socialData, $dbData) != false) {
            $user->provider = \Session::get('driver');
            $user->provider_id = $userData->id;
            $user->email = $userData->email;
            $user->name = $userData->name;
            $user->save();
        }
    }


}
