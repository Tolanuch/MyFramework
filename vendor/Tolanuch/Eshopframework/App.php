<?php

namespace Eshopframework;


use Eshopframework\DBDriver\EshopDBDriver;

class App
{
    private static $_instance;
    private $configs = array();
    private $router;

    private function __construct()
    {
        $this->configs = Configurator::getInstance()->getConfig();
        $this->router=Router::getInstance();
    }

    /**
     * @return App instance of the App class.
     */
    public static function getInstance()
    {
        if (self::$_instance === null)
            self::$_instance = new App();
        return self::$_instance;
    }

    public function run()
    {
        new EshopDBDriver();
    }

    public function done()
    {

    }
}