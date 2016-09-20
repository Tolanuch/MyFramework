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
        $this->routes=require(CONFIG . 'routes.php');
        $this->preprocessConfig();


        // Current URL.
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri = array_filter($uri);
    }

    private function preprocessConfig()
    {
        $newConfig = array();
        $matches = array();

        foreach($this->routes as $key => $value)
        {
            if( preg_match_all('/\{([a-z]+[0-9]*?)\}/', $value['pattern'],$matches) )
            {
                for ($i=0; $i<count($matches[0]); $i++)
                {
                    $newConfig[$key]['pattern'] = preg_replace('/\{' . $matches[0][$i] . '\}/', '(' . $value['preg'] . '?)', $value['pattern']);
                    echo '<pre>';
                    print_r($matches[0][$i]);
                }
            }
            else
            {
                $newConfig[$key]['pattern'] = $value['pattern'];
            }

            $newConfig[$key]['method'] = $value['method'];
            $newConfig[$key]['controller'] = $value['controller'];
            $newConfig[$key]['action'] = $value['action'];
            $newConfig[$key]['pattern'] = str_replace('/', '\/', $newConfig[$key]['pattern']);
            $newConfig[$key]['pattern'] = '/^' .$newConfig[$key]['pattern'] . '$/';
        }

        $this->routes = $newConfig;

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
        $currentRoute = array();
        foreach( $this->routes as $route )
        {
            $matches = array();
            if( preg_match( $route['pattern'], $_SERVER['REQUEST_URI'],$matches ) )
            {
                $currentRoute['controller'] = $route['controller'];
                $currentRoute['action'] = $route['action'];
                $currentRoute['parameters'] = array(
                    'name' => $matches[1]
                );
            }

        }

        return $currentRoute;
    }

}