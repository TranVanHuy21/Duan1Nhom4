<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        .wrapper {
            width: 100%;
            padding: 0 20px;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin-left: 2rem;
            font-size: 2.5rem;
            color: #fff;
        }

        .top-header {
            background-color: #444;
            color: #fff;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .top-header .left {
            display: flex;
            align-items: center;
            margin-right: 2rem;
        }

        .top-header .right {
            display: flex;
            align-items: center;
        }

        .top-header .right h2 {
            color: #fff;
            font-size: 1.5rem;
            margin: 0 1rem;
        }

        .top-header a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #5c67f2;
            border-radius: 4px;
            margin-left: 2rem;
            transition: background-color 0.3s ease;
        }

        .top-header a:hover {
            background-color: #5058e2;
        }

        .btn-logout {
            margin-right: 2rem;
        }

        .box-main {

            display: grid;
            grid-template-columns: 17rem 1fr;
            grid-gap: 1rem;
            padding: 1rem;
        }

        .box-views {
            max-width: 900%;
            padding: 1rem;
            margin-top: 1rem;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-main {
            border-top: 2px solid #fff;
            padding: 0.5rem;
            border-radius: 4px;
            background-color: #333;
        }

        .nav-main ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .nav-main li {
            margin: 1rem 0;
        }

        .nav-main a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: #5c67f2;
            transition: background-color 0.3s ease;
        }

        .nav-main a:hover {
            background-color: #4CAF50;
        }

        h2 {
            color: #333;
            font-size: 2.5rem;
            text-align: center;
            /* color: #333; */
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>




    <header class="top-header">
        <div class="left">
            <h1>TRANG QUẢN TRỊ WEBSITE</h1>
        </div>
        <div class="right">
            <?php
            if (isset($_SESSION['admin'])) {
                ?>
                <p>Xin chào
                <h2><?php echo $_SESSION['admin']['Username_admin']; ?></h2>
                </p>
                <nav class="btn-logout">
                    <a href="?act=logout">Đăng Xuất</a>
                </nav>
                <?php
            } else {
                echo '<nav class="btn-login"><a href="?act=login">Đăng Nhập</a></nav>';
            }
            ?>
        </div>
    </header>

    <!-- <div class="box-main">
        <div class="menu">
            <nav class="wrapper nav-main">
                <ul>
                    <li><a href="">Thống kê </a></li>
                    <li><a href="">Cửa hàng</a></li>
                    <li><a href="?act=listCategories">Quản trị danh mục</a></li>
                    <li><a href="?act=listProduct">Quản trị sản phẩm</a></li>
                    <li><a href="">Quản trị người dùng</a></li>
                    <li><a href="">Thoát</a></li>
                </ul>
            </nav>
        </div>
        <div class="box-views">
        </div>
    </div> -->

</body>

</html>