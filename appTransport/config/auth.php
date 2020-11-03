<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
            'hash' => false,
        ],
        'qtv' => [
            'driver' => 'session',
            'provider' => 'qtvs',
        ],
        'qtv-api' => [
            'driver' => 'token',
            'provider' => 'qtvs',
            'hash' => false,
        ],
        'nhanvien' => [
            'driver' => 'session',
            'provider' => 'nhanviens',
        ],
        'nhanvien-api' => [
            'driver' => 'token',
            'provider' => 'nhanviens',
            'hash' => false,
        ],
        'quanly' => [
            'driver' => 'session',
            'provider' => 'quanlys',
        ],
        'quanly-api' => [
            'driver' => 'token',
            'provider' => 'quanlys',
            'hash' => false,
        ],
        'ketoan' => [
            'driver' => 'session',
            'provider' => 'ketoans',
        ],
        'ketoan-api' => [
            'driver' => 'token',
            'provider' => 'ketoans',
            'hash' => false,
        ],
        'nvkho' => [
            'driver' => 'session',
            'provider' => 'nvkhos',
        ],
        'nvkho-api' => [
            'driver' => 'token',
            'provider' => 'nvkhos',
            'hash' => false,
        ],
        'taixe' => [
            'driver' => 'session',
            'provider' => 'taixes',
        ],
        'taixe-api' => [
            'driver' => 'token',
            'provider' => 'taixes',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\AdminModel::class,
        ],
        'qtvs' => [
            'driver' => 'eloquent',
            'model' => App\Models\QTVModel::class,
        ],
        'nhanviens' => [
            'driver' => 'eloquent',
            'model' => App\Models\NhanVienModel::class,
        ],
        'quanlys' => [
            'driver' => 'eloquent',
            'model' => App\Models\QuanlyModel::class,
        ],
        'ketoans' => [
            'driver' => 'eloquent',
            'model' => App\Models\KeToanModel::class,
        ],
        'taixes' => [
            'driver' => 'eloquent',
            'model' => App\Models\TaiXeModel::class,
        ],
        'nvkhos' => [
            'driver' => 'eloquent',
            'model' => App\Models\NVKhoModel::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'qtvs' => [
            'provider' => 'qtvs',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'nhanviens' => [
            'provider' => 'nhanviens',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'quanlys' => [
            'provider' => 'quanlys',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'ketoans' => [
            'provider' => 'ketoans',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'taixes' => [
            'provider' => 'taixes',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'nvkhos' => [
            'provider' => 'nvkhos',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
