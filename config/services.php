<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => env('FACEBOOK_APP_ID'),
        'client_secret' => env('FACEBOOK_APP_SECRET'),
        'redirect'      => env('FACEBOOK_CALLBACK_URL')
    ],

    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect' => 'http://oysterng.herokuapp.com/auth/social/twitter/callback',
    ],

    'google' => [
        'client_id' => '150079740698-t2pdj8o9sqk5btiqjr23vt1p93vrnnof.apps.googleusercontent.com',
        'client_secret' => 'nSpgvNOtgYMHQNvCB1faULxk',
        'redirect' => 'http://oysterng.herokuapp.com/auth/social/google/callback',
    ],

];

//     'mailgun' => [
//         'domain' => env('MAILGUN_DOMAIN'),
//         'secret' => env('MAILGUN_SECRET'),
//     ],

//     'ses' => [
//         'key' => env('SES_KEY'),
//         'secret' => env('SES_SECRET'),
//         'region' => 'us-east-1',
//     ],

//     'sparkpost' => [
//         'secret' => env('SPARKPOST_SECRET'),
//     ],

//     'stripe' => [
//         'model' => App\User::class,
//         'key' => env('STRIPE_KEY'),
//         'secret' => env('STRIPE_SECRET'),
//     ],
//     'facebook' => [
//         'client_id' => '236793390013591',
//         'client_secret' => '999a211262b2ce7e00f4b777831200dd',
//         'redirect' => 'http://oysterng.herokuapp.com/auth/social/facebook/callback',
//     ],

//     'twitter' => [
//         'client_id' => env('TWITTER_CLIENT_ID'),
//         'client_secret' => env('TWITTER_CLIENT_SECRET'),
//         'redirect' => 'http://oysterng.herokuapp.com/auth/social/twitter/callback',
//     ],

//     'google' => [
//         'client_id' => '150079740698-t2pdj8o9sqk5btiqjr23vt1p93vrnnof.apps.googleusercontent.com',
//         'client_secret' => 'nSpgvNOtgYMHQNvCB1faULxk',
//         'redirect' => 'http://oysterng.herokuapp.com/auth/social/google/callback',
//     ],

// ];


