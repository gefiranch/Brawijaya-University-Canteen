<?php

class Model
{
    protected $db;
    function __construct()
    {
        $host = "localhost:3306";
        $user = "root";
        $password = "";
        $database = "canteenUB";

        $this->db = new mysqli($host, $user, $password, $database);
        if (!$this->db) {
            echo "Database error";
            exit;
        }
    }
}
