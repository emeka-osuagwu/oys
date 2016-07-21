<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function getAllUsers()
    {
        $users = $this->userRepository->getAllUser();
        return view('pages.users', compact('users'));
    }

    public function updateprofile(Request $request)
    {
        //
         $user = User::find(Auth::user()->id);
       $user['name']=   $request->name;
       $user['email']=  $request->email;
       $user['phone']=  $request->phone;
       $user['date_birth']= $request->date_birth;
       $user->save();
       Session::flash('message', 'Profile Update Successful');
       return view('pages.profile');
    }
}
