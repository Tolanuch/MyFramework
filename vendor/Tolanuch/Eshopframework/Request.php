<?php

namespace Eshopframework;


class Request
{
    private static $_instance;

    private $config;
    private $requestUri;
    private $requestMethod;

    private function __construct()
    {
        $this->config = Configurator::getInstance()->getConfigByName('request');
        $this->requestMethod = $this->filterMethod();
        $this->requestUri=$_SERVER['REQUEST_URI'];
    }

    public static function getInstance()
    {
        if (self::$_instance === null)
            self::$_instance = new Request();
        return self::$_instance;
    }

    public function filterMethod()
    {
        if( in_array( $_SERVER['REQUEST_METHOD'], $this->config['methods'] ))
        {
            return $_SERVER['REQUEST_METHOD'];
        }
        return null; //@TODO: Return response with 500 code;
    }

    /**
     * @return mixed
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * @return null
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }


}