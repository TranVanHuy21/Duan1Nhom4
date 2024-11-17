<?php
require_once '../models/accModel.php';
require_once '../commons/function.php';
class accController
{
    public $accModel;

    public function __construct()
    {
        $pdo = connectDB();
        $this->accModel = new accModel(connectDB());
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
                header('location: views/dashBoard.php'); // Chuyển hướng đến trang dashboard
                exit();
            } else {
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.");</script>';
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