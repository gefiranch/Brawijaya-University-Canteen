<?php

require_once 'Controller.class.php';
require_once 'model/UsersModel.class.php';

class Users extends Controller
{
    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        } // Memulai sesi untuk menyimpan data pengguna
    }

    // Memproses pendaftaran akun baru
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $name = $_POST['name'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($name) || empty($password)) {
                include 'view/register.php';
                return;
            }

            $result = $this->usersModel->register($email, $name, $password);
            if ($result['success']) {
                header('Location: index.php?c=Users&m=login');
                exit();
            } else {
                $message = $result;
                include 'view/register.php';
            }
        } else {
            include 'view/register.php';
        }
    }

    // Memverifikasi data login dan membuat sesi
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($password)) {
                include 'view/login.php';
                return;
            }

            $result = $this->usersModel->login($email, $password);
            if ($result['success']) {
                $user = $result['user'];
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['user_name'] = $user['name'];

                header('Location: index.php?c=Users&m=dashboard');
                exit();
            } else {
                $message = $result;
                include 'view/login.php';
            }
        } else {
            include 'view/login.php';
        }
    }


    // Menghapus sesi dan logout user
    function logout()
    {
        session_destroy(); // Hapus sesi
        header('Location: index.php?c=Users&m=login'); // Redirect ke halaman login
        exit();
    }

    function dashboard()
    {
        // Cek apakah pengguna sudah login
        if (empty($_SESSION['id_user'])) {
            header('Location: index.php?c=Users&m=login');
            exit();
        }

        // Tampilkan halaman dashboard dengan data pengguna
        $this->view('dashboard', [
            'id_user' => $_SESSION['id_user'],
            'user_name' => $_SESSION['user_name'] ?? 'Guest'
        ]);
    }
}
