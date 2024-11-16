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
            echo "Đăng nhập không thành công!";
        }
    }
    public function checkLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login'])) {
            $Username_admin = $_POST['user'];
            $password = $_POST['pass'];
            $user = $this->accModel->checkAcc($Username_admin, $password);
            // var_dump($user);
            // die;
            if ($user) {
                if ($password == $user['Password_id']) {
                    $_SESSION['admin'] = $user;
                    header("location:index.php?act=dashboard");
                    exit();
                }
            } else {
                echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu!");</script>';
                header("location:?act=login");
                exit();
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        header("location:?act=login");
    }
}
?>