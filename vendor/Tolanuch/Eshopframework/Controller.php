<?php

namespace Eshopframework;


class Controller
{
    public $model;
    public $view;

    public function __construct() {
        $this->view = new View();
    }

    public function setModel($model) {
        $this->model = $model;
    }
}