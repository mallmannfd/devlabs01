<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:21
 */
return [
    'database' => [
        'user' => 'guilherme',
        'password' => 'q7a4z1x2',
        'host' => 'mysql.guilherme.mallmann.kinghost.net',
        'dbname' => 'guilherme',
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
