<?php

class Controller
{
    public $controller;

    function __construct($model)
    {
        require_once 'model/model.class.php';
        require_once 'model/' . $model . '.class.php';
        return new $model(); // Inisialisasi model
    }

    // Fungsi untuk memanggil view
    public function view($viewName, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value; // Membuat variabel lokal untuk setiap data
        }
        include 'view/' . $viewName . '.php'; // Memasukkan file view
    }
}
