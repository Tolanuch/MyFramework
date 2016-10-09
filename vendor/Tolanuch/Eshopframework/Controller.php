<?php

namespace Eshopframework;

use Eshopframework\Response\Response;

class Controller
{
    public $model;
    public $view;

    public function __construct() {
        $this->view = new View();
    }

    public function setModel($model) {
        $this->model = $model;
    }

    function render($viewname, $params)
    {
        $path=Configurator::getInstance()->getConfigByName('view_path');
        extract($params);
        $buffer=ob_start();
        include($path);
        $buffer=ob_get_clean();
        $response = new Response('Hello');

        return $response;
    }

    function redirect($dest_path)
    {

    }

}