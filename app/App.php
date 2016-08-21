<?php

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
     * Application execution, parsing address string.
     */
    public function run()
    {
        $router=Router::getInstance();
        $router->parse();
        $controller = App::getInstance($router->controller . 'Controller');
        $controller->__call($router->action);
    }

    public function done()
    {

    }
}