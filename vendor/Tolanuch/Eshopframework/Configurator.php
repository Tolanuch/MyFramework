<?php

/**
 * Class for managing the configurations of the application.
 */

namespace Eshopframework;


class Configurator
{

    private static $_instance;

    private $configs = array();

    private function __construct()
    {
        $defaultConfig = require_once( CONFIG . 'config_default.php' );
        $configFiles = scandir(CONFIG);
        $customConfig = array();
        foreach($configFiles as $value)
        {
            if(strpos($value,'.php'))
            {
                $customKey = substr($value, 0, strpos($value, '.'));
                $customConfig[$customKey] = require_once( CONFIG . $value );
            }
        }
        $this->config = array_merge($defaultConfig,$customConfig);
    }

    /**Get full configuration
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**Get certain value or array of values correspond requested $name
     * @param String $name of configuration to get
     * @return mixed value or array of configuration values were requested
     * @throws \Exception if there is no configuration which corresponds to $name
     */
    public function getConfigByName( $name )
    {
        if( isset( $this->config[$name] ) )
            return $this->config[$name];
        throw new \Exception('No configuration for ' . $name . ' has been set.');
    }

    /**
     * @return Configurator instance of the App class.
     */
    public static function getInstance()
    {
        if (self::$_instance === null)
            self::$_instance = new Configurator();
        return self::$_instance;
    }



}