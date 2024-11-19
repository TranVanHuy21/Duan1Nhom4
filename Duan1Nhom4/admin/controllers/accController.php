<?php
if (!function_exists('connectDB')) {
    // Define the connectDB() function to establish a database connection
    function connectDB()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'duanmau1';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
class accController
{
    public $accModel;

    public function __construct()
    {
        $pdo = connectDB();
        $this->accModel = new accModel($pdo);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Username_admin = filter_input(INPUT_POST, 'Username_admin', FILTER_SANITIZE_STRING);
            $password = $_POST['Password_id'];

            // Lấy thông tin người dùng từ model
            $user = $this->accModel->getUserByUsername($Username_admin);

            // So sánh mật khẩu đã mã hóa
            if ($user && password_verify($password, $user['Password_id'])) { // Sử dụng hàm password_verify nếu bạn đã mã hóa mật khẩu
                $_SESSION['user_admin'] = $user; // Lưu thông tin người dùng vào session
                header("Location: views/dashBoard.php"); // Chuyển hướng đến trang dashboard
                exit();
            } else {
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.");</script>';
                // Không sử dụng header chuyển hướng sau echo script
            }
        }

        require 'views/login.php'; // Hiển thị trang đăng nhập
    }

    public function logout()
    {
        unset($_SESSION['user_admin']); // Đảm bảo xóa phiên đăng nhập đúng
        header("Location: views/login.php");
        exit();
    }
}


?>