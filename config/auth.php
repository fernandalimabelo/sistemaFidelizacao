<?php

return [
    //dafault
    'defaults' => [
        'guard' => 'user',
        'passwords' => 'users',
    ],

    //guards
    'guards' => [
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'empresa' => [
            'driver' => 'session',
            'provider' => 'empresas',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    //providers
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'empresas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Empresa::class,
        ],
        
    ],


    //passwords
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'empresas' => [
            'provider' => 'empresas',
            'table' => 'password_resets',
            'expire' => 15,
        ],
    ],

];
