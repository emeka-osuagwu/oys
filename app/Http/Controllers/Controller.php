<?php

namespace App\Http\Controllers;


use App\Repositories\UserRepository;
use App\Repositories\PropertyRepository;
use App\Repositories\ValidationRepository;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$this->middleware('auth', ['except' => [
            'getLogin',
            'postLogin',
            'getRegister',
            'postRegister',
        ]]);

        $this->userRepository           = new UserRepository;
        $this->propertyRepository       = new PropertyRepository;
        $this->validationRepository     = new ValidationRepository;
    }
}
