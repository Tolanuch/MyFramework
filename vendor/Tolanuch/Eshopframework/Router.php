<?php

namespace Eshopframework;


class Router
{
    private static $_instance;

    private $routes = array();

    private $currentRoute = array();

    private $controller;

    private $action;

    private $params;

    private function __construct()
    {
        $this->routes=require(CONFIG . 'routes.php');
        $this->preprocessConfig();

    }

    private function preprocessConfig()
    {
        foreach($this->routes as $key => $route)
        {
            $route['pattern'] = str_replace('/','\/', $route['pattern']);
            if(isset($route['preg']))
            {
                $route['pattern'] = preg_replace('/\{id\}/', '('.$route['preg'].'?)', $route['pattern']);
            }
            $route['pattern'] = '/^'.$route['pattern'].'$/';
            $this->routes[$key] = $route;
        }
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
        $currentRoute=array();

        foreach( $this->routes as $route )
        {
            $matches = array();
            if( preg_match( $route['pattern'], $_SERVER['REQUEST_URI'],$matches ) )
            {
                $currentRoute['controller'] = $route['controller'];
                $currentRoute['action'] = $route['action'];
                $currentRoute['method'] = Request::getInstance()->getRequestMethod();
                $matches = array_slice($matches, 1);
                foreach ($matches as $key => $value)
                {
                    $currentRoute['params'][$key] = $value;
                }
            }

        }

        return $currentRoute;
    }

    /**
     *
     */
    public static function buildRoute($name, $params)
    {
        return $route=null;
    }

}