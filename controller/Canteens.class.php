<?php

require_once 'Controller.class.php';
require_once __DIR__ . '/../model/CanteensModel.class.php';
require_once __DIR__ . '/../model/CommentsModel.class.php';

class Canteens extends Controller
{
    private $canteensModel;
    private $commentsModel;

    public function __construct()
    {
        $this->canteensModel = new CanteensModel();
        $this->commentsModel = new CommentsModel();
    }

    // Menampilkan daftar semua kantin
    public function listCanteens()
    {
        $canteens = $this->canteensModel->getAllCanteen();

        $this->view('canteenList', [
            'canteens' => $canteens
        ]);
    }

    // Menampilkan detail kantin berdasarkan ID
    public function viewDetail($id)
    {
        // Validasi ID
        if (!is_numeric($id)) {
            header("Location: index.php?c=Canteens&m=listCanteens&status=invalid_id");
            exit;
        }

        $canteen = $this->canteensModel->getCanteenById((int)$id);

        if (!$canteen) {
            header("Location: index.php?c=Canteens&m=listCanteens&status=not_found");
            exit;
        }

        $comments = $this->commentsModel->getCommentsByCanteenId((int)$id);

        $this->view('canteenDetail', [
            'canteen' => $canteen,
            'comments' => $comments
        ]);
    }
}



