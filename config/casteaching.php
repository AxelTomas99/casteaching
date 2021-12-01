<?php

return [
    'default_user' => [
        'pasword' => env('DEFAULT_USER_PASSWORD', '12345678'),
        'name' => env('DEFAULT_USER_NAME', 'Axel Tomas'),
        'mail' => env('DEFAULT_USER_MAIL', 'axeltomas@iesebre.com')
    ],

    'default_teacher' => [
        'pasword' => env('DEFAULT_TEACHER_PASSWORD', '12345678'),
        'name' => env('DEFAULT_TEACHER_NAME', 'Axel Tomas'),
        'mail' => env('DEFAULT_TEACHER_MAIL', 'axeltomas@iesebre.com')
    ]

];
