<?php

namespace Eshopframework;


class Router
{
    private static $_instance;

    private $routes = array();

    private function __construct()
    {
        $this->routes=require_once(CONFIG . 'routes.php');
    }

    /**
     * @return Router instance of the App class.
     */
    public static function getInstance()
    {
        if (self::$_instance === null)
            self::$_instance = new Router();
        return self::$_instance;
    }

    public function getRoute()
    {

    }

}