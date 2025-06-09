<?php

class CanteenModel extends Model
{
    public function getAllCanteens()
    {
        $query = "SELECT * FROM canteen";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }

    public function getCanteenById($id)
    {
        $query = "SELECT * FROM canteen WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
}

