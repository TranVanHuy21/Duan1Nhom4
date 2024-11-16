<?php

class accController
{
    private $accModel;

    public function __construct()
    {
        $this->accModel = new accModel();
    }

    public function login()
    {
        $user = $_POST['user'] ?? null;
        $pass = $_POST['pass'] ?? null;

        if ($this->accModel->checkAcc($user, $pass)) {
            $_SESSION['user_admin'] = $user; // Thiết lập phiên đăng nhập
            header('Location: index.php'); // Chuyển hướng đến trang chính
            exit();
        } else {
            // Xử lý thông báo lỗi
            echo '<script>alert("Đăng nhập không thành công!");</script>';
        }
    }

    public function logout()
    {
        unset($_SESSION['user_admin']); // Đảm bảo xóa phiên đăng nhập đúng
        header("location:/laragon/www/Duan1Nhom4/Duan1Nhom4/admin/views/login.php");
        exit();
    }
}
?>