<?php

require_once 'Controller.class.php';
require_once 'model/FavoritesModel.class.php';

class Favorites extends Controller
{

    private $favoritesModel;
    public function __construct()
    {
        $this->favoritesModel = new FavoritesModel();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        } // Memulai sesi untuk menyimpan data pengguna
    }

    // Menambahkan item ke daftar favorit
    function addFavorite()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['id_user'] ?? null;
            $canteenId = $_POST['id_canteen'] ?? null;

            if ($userId && $canteenId) {
                $success = $this->favoritesModel->addFavorite($userId, $canteenId);
                if ($success) {
                    // Arahkan ke halaman listFavorites (tanpa reload manual)
                    header("Location: index.php?c=Canteens&m=viewDetail&id=$canteenId&status=added");
                    exit;
                }
            }
        }
        header("Location: index.php?c=Canteens&m=viewDetail&id=$canteenId&status=fail");
        exit;
    }


    // Menghapus item dari daftar favorit
    function removeFavorite()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['id_user'] ?? null;
            $canteenId = $_POST['id_canteen'] ?? null;

            if ($userId && $canteenId) {
                $success = $this->favoritesModel->deleteFavorite($userId, $canteenId);
                if ($success) {
                    header("Location: index.php?c=Favorites&m=listFavorites&status=removed");
                    exit;
                }
            }
        }
        // Jika gagal atau method bukan POST
        header("Location: index.php?c=Canteens&m=listCanteens&status=fail");
        exit;
    }

    // Mengambil daftar item favorit
    function listFavorites()
    {
        $userId = $_SESSION['id_user'] ?? null;
        if (!$userId) {
            header('Location: index.php?c=Canteens&m=login');
            exit;
        }

        $favorites = $this->favoritesModel->getFavoritesByUserId($userId);

        // Tampilkan view daftar favorit
        $this->view('favoriteList', [
            'favorites' => $favorites,
            'user_name' => $_SESSION['user_name'] ?? 'Guest'
        ]);
    }
}
