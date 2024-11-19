<?php

class accModel
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Phương thức kiểm tra thông tin đăng nhập
    public function getUserByUsername($Username_admin)
    {
        try {
            $sql = "SELECT * FROM useradmin WHERE Username_admin = :Username_admin";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':Username_admin' => $Username_admin]);
            return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về thông tin người dùng, bao gồm cả Password_id
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
}

?>