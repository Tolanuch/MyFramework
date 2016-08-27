<?php

namespace Eshopframework\DBDriver;


class EshopDBDriver
{

    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection=DBFactory::getConnection();
        print_r($this->dbConnection);
    }
}