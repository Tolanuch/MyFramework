<?php

namespace App;

class Config extends Singleton
{
    /**
     * @var array to save all types of the app.
     */
    private $configs = array();

    public function setConfig( $config, &$elements )
    {
        $this->configs[$config] = $elements;
    }

    public function __get( $name )
    {
        return isset( $this->configs[$name] ) ? $this->configs[$name] : null;
    }

    public function __set( $name,$value )
    {
        $this->configs[$name] = $value;
    }
// Better to use anonymous class than regular arrays.
    /* return new class {
        public $test='';
    }; */
}