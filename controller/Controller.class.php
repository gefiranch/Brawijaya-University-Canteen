<?php

class Controller
{
    public $controller;

    function __construct($controllerName)
    {
        // Memanggil model Model.class.php
        require_once 'model/Model.class.php';

        // Memanggil controller yang sesuai
        require_once 'controller/' . $controllerName . '.class.php';

        // Instansiasi controller dan simpan dalam properti $controller
        $this->controller = new $controllerName();
    }
}
