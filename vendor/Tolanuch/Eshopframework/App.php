<?php

namespace Eshopframework;


use Eshopframework\Exception\NotFoundPageException;
use Eshopframework\Exception\AccessDeniedException;
use Eshopframework\Response\Response;

class App
{
    // The App instance.
    private static $_instance;

    // Application configuration.
    private $configs = array();

    // Current route variable.
    private $route;

    private function __construct()
    {
        $this->configs = Configurator::getInstance()->getConfig();
        $this->route=Router::getInstance()->getRoute();
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


    /**
     * Run the web application.
     */
    public function run()
    {

        try {
            if (!$this->route) {
                throw new NotFoundPageException('Route');
            } else {
                //todo call controller, get response and render
                $response = call_user_func_array('App\\Controller\\' . $this->route['controller'] . '::' . $this->route['method'], $this->route['params']);
            }

            if (!$response instanceof Response) {
                throw new \Exception('Bad response type');
            }
            else
                $response->send();

            $model = new Model();
            $model->find(1);
        } catch (NotFoundPageException $e){
            // @TODO: 404 page
        } catch (AccessDeniedException $e){
            // @TODO: 403 page
        } catch (\Exception $e){
            // @TODO: 500 page
        }
    }

    /**
     * The last steps of the application.
     */
    public function done()
    {

    }

    private final function __clone() {}
}