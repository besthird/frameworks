<?php

use Swoft\Http\Server\HttpServer;

return [
    'logger' => [
        'flushRequest' => false,
        'enable' => false,
        'json' => false,
    ],
    'httpServer' => [
        'class' => HttpServer::class,
        'port' => 9501,
        /* @see HttpServer::$setting */
        'setting' => [
            'worker_num' => 4,
        ]
    ],
    'db' => [
        'class' => \Swoft\Db\Database::class,
        'dsn' => 'mysql:dbname=hyperf;host=127.0.0.1',
        'username' => 'root',
        'password' => env('DB_PASSWORD', ''),
        'charset' => 'utf8mb4',
    ],
];
