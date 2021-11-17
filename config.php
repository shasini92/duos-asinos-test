<?php

return [
    'database' => [
        'name' => 'duos-asinos-test-db',
        'username' => 'duos_asinos',
        'password' => 1234567890,
        'connection' => 'duos-asinos-db',
        'port' => '3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
