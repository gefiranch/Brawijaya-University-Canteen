<?php

require_once '../controller/Controller.class.php';
require_once '../model/CommentsModel.class.php';

class Canteens extends Controller

{
    // Menampilkan daftar semua kantin
    public function listCanteens()
    {
        $canteensModel = new CanteensModel();
        $canteens = $canteensModel->getAllCanteen();

        include '/view/canteenList.php';
    }

    // Menampilkan detail kantin berdasarkan ID
    public function viewDetail($id)
    {
        $canteensModel = new CanteensModel();
        $canteen = $canteensModel->getCanteenById($id);

        $commentsModel = new CommentsModel();
        $comments = $commentsModel->getCommentsByCanteenId($id);

        include '/view/canteenDetail.php';
    }
}
