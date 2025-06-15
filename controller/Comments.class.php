<?php

require_once 'model/CommentsModel.php';

class Comments extends Controller
{
    // Menambahkan komentar baru dari user pada kantin tertentu
    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['user_id'];
            $canteenId = $_POST['canteen_id'];
            $comment = $_POST['comment'];

            $model = new CommentsModel();
            $result = $model->addComment($userId, $canteenId, $comment);

            if ($result) {
                header("Location: index.php?page=detail&id=$canteenId");
                exit;
            }
            include 'view/commentAdd.php';
        }
    }

    // Menghapus komentar berdasarkan ID
    public function deleteComment()
    {
        if (isset($_GET['id'])) {
            $commentId = $_GET['id'];

            $model = new CommentsModel();
            $model->deleteComment($commentId);
        }

        header('Location: index.php?page=commentList');
        exit;
    }


    // Menampilkan semua komentar dari user
    public function showUserComments()
    {
        if (isset($_GET['user_id'])) {
            $userId = $_GET['user_id'];

            $model = new CommentsModel();
            $comments = $model->getCommentsByUserId($userId);
        }
        include 'view/commentList.php';
    }
}
