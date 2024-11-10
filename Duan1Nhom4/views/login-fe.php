<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <div class="login-container">
        <h2>Đăng nhập với</h2>
        <div class="social-login">
            <button class="google-login">G Google</button>
            <button class="zalo-login">Zalo</button>
        </div>
        <p>hoặc</p>
        <form action="?act=login-client" method="post">
            <label for="username"> TÊN ĐĂNG NHẬP:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">MẬT KHẨU:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <a href="?act=forgotPassword" class="forgot-password">Quên mật khẩu?</a>
            <button type="submit" name="btn-login-client">Đăng nhập</button>
        </form>
        <p>Bạn chưa có tài khoản? <a href="index.php?act=register-client">Đăng ký ngay</a></p>
        <p><a href="#">Xem chính sách ưu đãi Smember</a></p>
    </div>
</body>

</html>