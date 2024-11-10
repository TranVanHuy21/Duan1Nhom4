<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>

<body>

    <body>
        <?php
        require 'header.php';
        ?>
        <div class="box-main">
            <div class="menu">
                <nav class="wrapper nav-main">
                    <ul>
                        <li><a href="?act=dashboard">Thống kê </a></li>

                        <li><a href="?act=listCategories">Quản trị danh mục</a></li>
                        <li><a href="?act=listParentCategories">Quản trị danh mục Parent</a></li>
                        <li><a href="?act=listProduct">Quản trị sản phẩm</a></li>
                        <li><a href="?act=listSlides">Quản trị Slide</a></li>
                        <li><a href="?act=listUsers">Quản trị người dùng</a></li>
                        <li><a href="?act=listUserAdmins">Quản trị admin</a></li>
                        <li><a href="">Thoát</a></li>
                    </ul>
                </nav>
            </div>
            <div class="box-views">
                <div class="container">

                </div>
            </div>
        </div>

    </body>
</body>

</html>