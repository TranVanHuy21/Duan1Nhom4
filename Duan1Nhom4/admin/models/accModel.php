<?php

class accModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=duanmau1', 'root', '');
    }

    // Phương thức kiểm tra thông tin đăng nhập
    public function checkAcc($Username_admin, $password)
    {
        try {
            $sql = "SELECT * FROM useradmin WHERE Username_admin = :Username_admin";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute(
                [':Username_admin' => $Username_admin]
            );
            return $stmt->fetch(PDO::FETCH_ASSOC);



        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
}
?>