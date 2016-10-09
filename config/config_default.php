<?php
return array(
    'charset' => 'utf8',

    'defaultController' =>'Main',

    'defaultAction'=>'Index',

    'db' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'user id' => 'root',
        'password' => '1234',
        'database'=> 'eshop'
    ],

    'view_path' => $_SERVER['DOCUMENT_ROOT'] . '/app/view'
)
?>