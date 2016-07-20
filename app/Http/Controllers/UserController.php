<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Http\Requests;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Jobs\SendNewUserAccountInfo;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
	
	public function getAllUsers(Request $request)
	{
		$users 				= $this->userRepository->getAllUser();
		$admins 			= $this->userRepository->getUserWhere('role', 1);	
		$tenant 			= $this->userRepository->getUserWhere('role', 3);	
		$all_users 			= $this->userRepository->getAllUser();
		$property_owner 	= $this->userRepository->getUserWhere('role', 2);	
		
		if ($request->has('admins')) 
		{
			$users = $admins;
		}

		if ($request->has('property_owners')) 
		{
			$users = $property_owner;
		}

		if ($request->has('tenants')) 
		{
			$users = $tenant;
		}

	 	return view('pages.users', compact('users', 'all_users', 'admins', 'tenant', 'property_owner'));
	}
	
	public function getUser($id)
	{
		$user = $this->userRepository->getUserWhere('id', $id);
		return view('pages.profile', compact('user'));
	}

	public function getCreateUserAccount()
	{
		$users 				= $this->userRepository->getAllUser();
		$admins 			= $this->userRepository->getUserWhere('role', 1);	
		$tenant 			= $this->userRepository->getUserWhere('role', 3);	
		$all_users 			= $this->userRepository->getAllUser();
		$property_owner 	= $this->userRepository->getUserWhere('role', 2);	
		
		return view('pages.create_user', compact('users', 'all_users', 'admins', 'tenant', 'property_owner'));
	}

	public function postCreateUserAccount(Request $request)
	{
		$request['tmp_passsword'] = substr(bcrypt($request['name']), 50); 
		$this->userRepository->addUser($request->all());
		$this->dispatch(new SendNewUserAccountInfo($request->all()));
		return back();
	}

	public function sendUserEmail(Request $request)
	{
		$this->dispatch(new SendEmail($request->all()));
		session()->flash('send-message', 'good');
		return back();
	}

	public function updateprofile(Request $request)
	{
	  //
	 //   $user = User::find(Auth::user()->id);
	 // $user['name']=   $request->name;
	 // $user['email']=  $request->email;
	 // $user['phone']=  $request->phone;
	 // $user['date_birth']= $request->date_birth;
	 // $user->save();
	 // Session::flash('message', 'Profile Update Successful');
	 return view('pages.profile');
	}

}
