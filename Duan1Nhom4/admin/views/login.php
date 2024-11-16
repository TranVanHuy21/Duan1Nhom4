<?php
session_start();
include '../controllers/accController.php'; // Thêm include cho accController
$accController = new accController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accController->login(); // Gọi phương thức login từ accController
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
</head>

<body>
    <h2>Đăng Nhập</h2>
    <form method="post" action="?act=login">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="user" required> <!-- Đổi name thành 'user' -->
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="pass" required> <!-- Đổi name thành 'pass' -->
        <br>
        <button type="submit">Đăng Nhập</button>
    </form>
</body>

</html>