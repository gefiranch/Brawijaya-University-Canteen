<?php

require_once 'Model.class.php';

class CommentsModel extends Model
{
    // // Mengambil semua komentar yang dibuat oleh user tertentu
    public function getCommentsByUserId($userId)
    {
        $stmt = $this->db->prepare("
        SELECT 
            c.comment, 
            c.id_comment, 
            ct.name AS canteen_name
        FROM comments c 
        JOIN canteens ct ON c.id_canteen = ct.id_canteen
        WHERE c.id_user = ?
    ");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
        $stmt->close();
        return $comments;
    }

    // Mengambil semua komentar pada sebuah kantin tertentu
    public function getCommentsByCanteenId($canteenId)
    {
        $stmt = $this->db->prepare("SELECT comments.comment, users.name AS user_name
            FROM comments JOIN users ON comments.id_user = users.id_user
            WHERE comments.id_canteen = ?
            ORDER BY comments.id_comment DESC");
        $stmt->bind_param("i", $canteenId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    // Menambahkan komentar baru ke dalam database
    public function addComment($userId, $canteenId, $content)
    {
        $stmt = $this->db->prepare("INSERT INTO comments (id_user, id_canteen, comment) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $userId, $canteenId, $content);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // Menghapus komentar dari database berdasarkan ID komentar
    public function deleteComment($commentId)
    {
        $stmt = $this->db->prepare("DELETE FROM comments WHERE id_comment = ?");
        $stmt->bind_param("i", $commentId);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function getCanteenById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM canteens WHERE id_canteen = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row;
    }
}
