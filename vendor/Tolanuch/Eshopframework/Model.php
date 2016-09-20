<?php

namespace Eshopframework;


class Model
{
    protected $db;

    protected $config = array();

    public function __construct() {
        $this->config = Configurator::getInstance()->getConfigByName('db');
    }
}