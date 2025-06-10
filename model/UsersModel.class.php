<?php

class UsersModel extends Model {
    // Membuat fungsi register yang mana email tidak bisa sama (unik)
    function register($email, $name, $password) {
        $checkSql = "SELECT id FROM users WHERE email = ?";
        $checkStmt = $this->db->prepare($checkSql);
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult && $checkResult->num_rows > 0) {
            return ["success" => false, "message" => "email already exists."];
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (email, name, password) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sss", $email, $name, $hashedPassword);        
        if ($stmt->execute()) {
            return ["success" => true, "message" => "Registration successful."];
        }
        
        return ["success" => false, "message" => "Registration failed."];
    }

    // Membuat fungsi login dengan email dan password yang di hash
    function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return ["success" => true, "user" => $user];
            }
        }
        return ["success" => false, "message" => "Invalid name or password."];
    }
}
?>
