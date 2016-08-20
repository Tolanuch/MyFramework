<?php

namespace App;

abstract class Singleton
{
    /**
     * @var instances variable to store single objects of the classes.
     */
    private static $instances=array();

    private function __construct() { }

    /**
     * Function to find an object of the needed class in the array.
     * @return instance
     */
    public static function getInstance( $className = false )
    {
        $keyClassName = ( $className === false ) ? get_called_class() : $className;
        if( class_exists( $keyClassName ) )
        {
            if( !isset( self::$instances[ $keyClassName ] ) )
                self::$instances[ $keyClassName ] = new $keyClassName();
            return self::$instances[ $keyClassName ];
        }
        else throw new \Exception('Class ' . $keyClassName . '  does not exist!');
    }

    final private function __clone(){}
}