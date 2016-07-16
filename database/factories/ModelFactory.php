<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'role' 				=> 1,
        'email' 			=> "admin@oyster.com",
        'password' 			=> "password",
        'profile_status' 	=> 0,
        'remember_token' 	=> str_random(10),
    ];
});
