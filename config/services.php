<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'facebook' => [
        'client_id' => '181543129600697',
        'client_secret' => '698ebba65e6c588b740b6fad5c5dc190',
        'redirect' => '/social-auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '1012448563452-08b7nvoviil8ripor0u7t4gipu7ieav6.apps.googleusercontent.com',
        'client_secret' => 'o6UTOVlWzhLUq-C786NWDjto',
        'redirect' => '/social-auth/google/callback',
    ],

];
