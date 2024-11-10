<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin: 2rem auto;
        background: #fff;
        padding: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow-x: auto;
        /* Enable horizontal scrolling */
    }

    h1 {
        text-align: center;
        /* color: #333; */
        margin-bottom: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 1rem;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form p {
        margin: 0.5rem 0;
        color: #555;
    }

    form input[type="text"],
    form input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    form input[type="submit"] {
        background-color: #5c67f2;
        color: #fff;
        border: none;
        padding: 0.75rem;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 1rem;
    }

    form input[type="submit"]:hover {
        background-color: #5058e2;
    }

    .btn {
        display: inline-block;
        padding: 0.5rem 1rem;
        margin: 0.5rem 0;
        background-color: #5c67f2;
        color: #fff;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #5058e2;
    }

    .btn-edit {
        background-color: #4CAF50;
    }

    .btn-edit:hover {
        background-color: #45a049;
    }

    .btn-delete {
        background-color: #f44336;
    }

    .btn-delete:hover {
        background-color: #e53935;
    }
    </style>
</head>

<body>
    <?php
    require '/laragon/www/DuAnCellphoneS/admin/views/header.php';
    ?>
    <div class="box-main">
        <div class="menu">
            <nav class="wrapper nav-main">
                <ul>
                    <li><a href="?act=dashboard">Thống kê </a></li>

                    <li><a href="?act=listCategories">Quản trị danh mục</a></li>
                    <li><a href="?act=listParentCategories">Quản trị danh mục Parent</a></li>
                    <li><a href="?act=listProduct">Quản trị sản phẩm</a></li>
                    <li><a href="?act=listUsers">Quản trị người dùng</a></li>
                    <li><a href="?act=listUserAdmins">Quản trị admin</a></li>
                    <li><a href="?act=listSlides">Quản trị Slide</a></li>
                    <li><a href="">Thoát</a></li>
                </ul>
            </nav>

        </div>
        <div class="box-views">
            <div class="container">
                <h1>Edit Admin</h1>
                <form action="?act=editUserAdmin&id=<?= $userAdmin['User_admin_id'] ?>" method="post">
                    <p>Username</p><input type="text" name="Username_admin"
                        value="<?= htmlspecialchars($userAdmin['Username_admin']) ?>">
                    <p>Password</p><input type="password" name="Password_id">

                    <input type="submit" value="Update Admin" name="btn_update">
                </form>
            </div>
        </div>
</body>

</html>