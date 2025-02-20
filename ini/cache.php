<?php

return [
    'driver'=> 'filesystem.default',
    'drivers' => [
        'filesystem'    =>  [
            'default'  =>  'cache' . DIRECTORY_SEPARATOR .'default'
        ],
        'memcached' =>  [

        ],
        'redis' =>  [
            
        ]
    ]
];