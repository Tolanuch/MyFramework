<?php

/**
 * Custom universal adapter for the databases.
 */

namespace Eshopframework\DBDriver;


class EshopDBDriver
{

    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection=DBFactory::getConnection();
    }

    public function query($queryText)
    {

    }

    public function fetch()
    {

    }
}