<?php

return [
    'default_user' => [
        'password' => env('DEFAULT_USER_PASSWORD', 'alumne'),
        'name' => env('DEFAULT_USER_NAME', 'Axel Tomas'),
        'email' => env('DEFAULT_USER_EMAIL', 'axeltomas@iesebre.com')
    ],
    'default_teacher' => [
        'password' => env('DEFAULT_TEACHER_PASSWORD', 'alumne'),
        'name' => env('DEFAULT_TEACHER_NAME', 'Sergi Tur Badenas'),
        'email' => env('DEFAULT_TEACHER_EMAIL', 'sergiturbadenas@iesebre.com')
    ],
    'admins' => [
        'axeltomas@iesebre.com',
        'sergiturbadenas@gmail.com',
    ]
];
