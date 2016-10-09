<?php

namespace Eshopframework;

use Eshopframework\DBDriver\EshopDBDriver;

class Model
{
    protected $dbo;

    protected $config = array();

    public function __construct() {
        $this->config = Configurator::getInstance()->getConfigByName('db');
        $this->dbo = new EshopDBDriver();
    }

    public function find(int $id)
    {
        $sql = 'SELECT * FROM product WHERE id = ' . (int)$id;
        $this->dbo->query($sql);
        //$result = $this->dbo->loadObject(static);
        return $result=null;
    }

    public function findAll()
    {

    }

    public function delete($id)
    {

    }

    public function save($id = null)
    {
        if ( $id != null ) {
            //@TODO: Create query;
        }
        else
        {
            //@TODO: Update query;
        }
    }
}