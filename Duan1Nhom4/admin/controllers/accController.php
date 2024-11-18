<?php
if (!function_exists('connectDB')) {
    // Define the connectDB() function to establish a database connection
    function connectDB()
    {
        $host = 'localhost';
        $username = 'your_username';
        $password = 'your_password';
        $dbname = 'your_database_name';

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
            $Username_admin = $_POST['Username_admin'];
            $password = $_POST['Password_id'];

            // Lấy thông tin người dùng từ model
            $user = $this->accModel->getUserByUsername($Username_admin);

            // So sánh trực tiếp Username_admin và Password_id
            if ($user && $password === $user['Password_id']) {
                $_SESSION['user_admin'] = $user; // Lưu thông tin người dùng vào session
                echo '<script>window.location.href = "views/dashBoard.php";</script>'; // Chuyển hướng đến trang dashboard
                exit();
            } else {
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.");</script>';
                header("location: views/login.php"); // Chuyển hướng đến trang đăng nhập
                exit();
            }
        }

        require 'views/login.php'; // Hiển thị trang đăng nhập
    }

    public function logout()
    {
        unset($_SESSION['user_admin']); // Đảm bảo xóa phiên đăng nhập đúng
        header("location: views/login.php");
        exit();
    }
}
?>