<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function dashboardPage()
	{
		return view('pages.index');
	}

	public function getLogin()
	{
		return view('pages.login');
	}

	public function getRegister()
	{
		return view('pages.register');
	}

	public function getCreateProperty()
	{
		return view('pages.create_property');
	}

}
