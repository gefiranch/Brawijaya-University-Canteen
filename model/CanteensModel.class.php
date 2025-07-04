<?php

require_once 'Model.class.php';

class CanteensModel extends Model
{
    // Mengambil semua data kantin
    public function getAllCanteen()
    {
        $query = "SELECT * FROM canteens";
        $result = $this->db->query($query);

        $canteens = [];
        while ($row = $result->fetch_assoc()) {
            $canteens[] = $row;
        }
        return $canteens;
    }

    // Mengambil data kantin berdasarkan ID
    public function getCanteenById($id)
    {
        $query = "SELECT * FROM canteens WHERE id_canteen = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
