<?php

namespace App;

/**
 * Class Router to split address string for the parts controller -> action.
 * @package App
 */
class Router extends Singleton
{
    public $action = 'index';
    public $controller = 'Controller';

    function parse()
    {
        if ( isset( $_REQUEST['controller'] ) )
            $this->controller = $_REQUEST['controller'];
        if ( isset( $_REQUEST['action'] ) )
            $this->action = $_REQUEST['action'];
    }
}

?>