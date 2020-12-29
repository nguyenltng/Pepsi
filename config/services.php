<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '384040182666615',
        'client_secret' => '25a1c72d51bab4f7b7185aefce8948bc',
        'redirect' => 'http://pepsi.test:8080/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '58897067615-27u7vstcmsk6d6f4u7he9b7uhi7cdg74.apps.googleusercontent.com',
        'client_secret' => 'ilvXZkxN0y7AmuHkbgS65x2f',
        'redirect' => 'http://pepsi.test:8080/login/google/callback',
    ],

];
