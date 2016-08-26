<?php
/**
 * Created by PhpStorm.
 * User: anatolii
 * Date: 26.08.16
 * Time: 12:53
 */

namespace Eshopframework;


class App
{
    private static $_instance;
    private $configs = array();

    private function __construct()
    {
        $this->configs = Configurator::getInstance()->getConfig();
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

    }

    public function done()
    {

    }
}