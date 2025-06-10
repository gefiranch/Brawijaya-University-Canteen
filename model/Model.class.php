<?php

class Model
{
    protected $db;

    public function __construct()
    {
        // Konfigurasi koneksi ke database
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'canteenUB';

        // Membuat koneksi ke database
        $this->db = new mysqli($host, $user, $pass, $dbname);

        // Memeriksa koneksi
        if ($this->db->connect_error) {
            echo "Database error";
            exit;
        }
    }
}
