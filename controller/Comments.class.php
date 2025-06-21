<?php

require_once 'model/CommentsModel.class.php';
require_once 'Controller.class.php';

class Comments extends Controller
{
    public function addComment()
    {
        if (!isset($_SESSION['id_user'])) {
            header('Location: index.php?c=Users&m=login');
            exit();
        }

        $model = new CommentsModel();

        // Jika GET → tampilkan form
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $canteenId = $_GET['id'];
            $canteen = $model->getCanteenById($canteenId); // Optional kalau mau tampilkan nama kantin, dsb
            include 'view/commentAdd.php';
            return;
        }

        // Jika POST → proses penyimpanan komentar
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['id_user'];
            $canteenId = $_POST['id_canteen'];
            $comment = $_POST['comment'];

            $model->addComment($userId, $canteenId, $comment);
            header("Location: index.php?c=Canteens&m=viewDetail&id=$canteenId");
            exit();
        }
    }


    // Menghapus komentar berdasarkan ID
    public function deleteComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
            $commentId = $_POST['delete_id'];

            $model = new CommentsModel();
            $model->deleteComment($commentId);
        }

        // Redirect kembali ke daftar komentar setelah penghapusan
        header('Location: index.php?c=Comments&m=showUserComments'); // atau sesuaikan dengan tampilan comment list kamu
        exit;
    }
    // public function deleteComment()
    // {
    //     if (isset($_GET['id'])) {
    //         $commentId = $_GET['id'];

    //         $model = new CommentsModel();
    //         $model->deleteComment($commentId);
            
    //     }
    //     header('Location: index.php?page=commentList');
    //     exit;
    // }


    // Menampilkan semua komentar dari user
    public function showUserComments()
    {
        if (isset($_SESSION['id_user'])) {
            $userId = $_SESSION['id_user'];
            $model = new CommentsModel();
            $comments = $model->getCommentsByUserId($userId);
        }
        include 'view/commentList.php';
    }
}
