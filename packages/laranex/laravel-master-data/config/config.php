<?php

return [
    'prefix' => env('MASTER_DATA_PREFIX', 'api/master-data'),
    'middleware' => ['api'],

    'models' => [
        'users' => App\Models\User::class,
    ],
];
