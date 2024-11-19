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
            $Username_admin = filter_input(INPUT_POST, 'Username_admin');
            $password = $_POST['Password_id'];

            $user = $this->accModel->getUserByUsername($Username_admin);

            if ($user) {
                $_SESSION['user_admin'] = $user;
                header("Location: views/dashBoard.php");
                exit();
            } else {
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.");</script>';
            }
        }

        require 'views/login.php';
    }

    public function logout()
    {
        unset($_SESSION['user_admin']);
        header("Location: views/login.php");
        exit();
    }
}


?>