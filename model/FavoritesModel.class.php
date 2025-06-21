<?php

require_once 'Model.class.php';

class FavoritesModel extends Model
{

    // Mengambil semua data kantin yang disukai berdasarkan ID User
    function getFavoritesByUserId($userId)
    {
        $sql = "SELECT c.* FROM favorites f JOIN canteens c 
                ON f.id_canteen = c.id_canteen 
                WHERE f.id_user = ? 
                ORDER BY f.id_like DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Menambahkan data kantin ke favorites
    function addFavorite($userId, $canteenId)
    {
        $sql = "INSERT INTO favorites (id_user, id_canteen) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $userId, $canteenId);
        $stmt->execute();

        return $stmt->affected_rows > 0; // return true jika berhasil, artinya ada baris yang berhasil diubah di database
    }

    // Menghapus data favorit
    function deleteFavorite($userId, $canteenId)
    {
        $sql = "DELETE FROM favorites WHERE id_user = ? AND id_canteen = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $userId, $canteenId);
        $stmt->execute();

        return $stmt->affected_rows > 0; // return true jika berhasil, artinya ada baris yang berhasil diubah di database
    }
}
