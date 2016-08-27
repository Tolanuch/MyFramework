<?php

namespace Eshopframework;


class Router
{
    private static $_instance;

    private $routes = array();

    private $controller;

    private $action;

    private $params;

    private function __construct()
    {
        $this->routes=require_once(CONFIG . 'routes.php');

        // Current URL.
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri = array_filter($uri);

        $this->controller = array_shift($uri);

        $this->action = array_shift($uri);

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