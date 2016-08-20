<?php

// все зробити через сінглтон (abstract) для адмінки і фронт потім окремі додатки
namespace App;

/**
 * Class App main application
 * @package App
 */

class App extends Singleton
{
    // config should to be more defended.
    public $config = [];

    // для конфігурації використовується окремий клас.
    public function __construct($config=[])
    {
        $this->config = $config;
    }

    /**
     * Application execution
     */
    public function run()
    {
        // що куди передається, використовується файл routes.php
        //Router::getInstance()->parse();
        //$controller = App::getInstance(Router::getInstance()->controller.'Controller');
        //$controller->__call('action'.Router::getInstance()->action);
    }

    public function done()
    {

    }
}