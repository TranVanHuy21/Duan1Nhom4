<?php
require_once '../controllers/accController.php';
$accController = new accController();
$error = $accController->login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>

<body>
    <h2>Đăng Nhập</h2>
    <form method="POST" action="?act=login">
        <input type="text" name="Username_admin" placeholder="Tên đăng nhập" required>
        <input type="password" name="Password_id" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>
</body>

</html>