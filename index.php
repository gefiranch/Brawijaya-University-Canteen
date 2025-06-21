<?php

session_start();

$controllerName = $_GET['c'] ?? 'Users';
$method = $_GET['m'] ?? 'login';

require_once "controller/{$controllerName}.class.php";
$controller = new $controllerName();

if (method_exists($controller, $method)) {
    if (isset($_GET['id'])) {
        $controller->$method($_GET['id']); // method($id)
    } else {
        $controller->$method(); // method()
    }
} else {
    echo "Method not found.";
}
