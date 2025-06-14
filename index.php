<?php
$c = $_GET['c'] ?? 'Users'; // ambil controller dari URL, default ke 'home'
$m = $_GET['m'] ?? 'login'; // ambil method dari URL, default ke 'index'

require_once 'controllers/Controller.class.php'; // include file controller
require_once 'controllers/' . $c . '.class.php'; // include file controller

// Run!
$controller = new $c(); // inisialisasi controller
$controller->$m(); // menjalankan method yang dipanggil dari URL
