<?php


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'role' 				=> 1,
        'email' 			=> "admin@oyster.com",
        'password' 			=> "password",
        'profile_status' 	=> 0,
        'remember_token' 	=> str_random(10),
    ];
});

$factory->define(App\Property::class, function (Faker\Generator $faker) {
    return [
        'type' 				=> $faker->title,
        'city'				=> $faker->city,
        'price'				=> 300,
        'state'				=> $faker->state,
        'title'				=> $faker->title,
        'user_id'			=> 1,
        'address'			=> $faker->address,
        'description'		=> $faker->catchPhrase,
    ];
});

// $factory->define(App\User::class, function () {
//     return [
//         'role' 				=> rand(1, 3),
//         'email' 				=> rand(1, 10000)."emeka@gmail.com",
//         'password' 			=> "password",
//         'profile_status' 	=> rand(0, 1),
//         'remember_token' 	=> str_random(10),
//     ];
// });
