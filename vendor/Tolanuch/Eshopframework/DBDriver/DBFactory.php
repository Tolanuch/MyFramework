<?php

/**
 * Factory class to create database connections of different database management system.
 */

namespace Eshopframework\DBDriver;

use Eshopframework\Configurator;
use Eshopframework\DBDriver\DBAdapter\MySQLAdapter;

class DBFactory
{
    private static $adapter;

    public static function getConnection()
    {
        $dbConfig=Configurator::getInstance()->getConfigByName('db');
        if ($dbConfig!=null)
            switch ($dbConfig['driver'])
            {
                case 'mysql':
                {
                    self::$adapter=new MySQLAdapter();
                    break;
                }
            }
        return self::$adapter;
    }
}