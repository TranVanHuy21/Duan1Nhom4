<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Admins</title>
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

        .edit-btn {
            background-color: #4CAF50;
            /* Màu xanh lá */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        /* CSS cho nút Xóa */
        .delete-btn {
            background-color: #f44336;
            /* Màu đỏ */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
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
                <h1>Admin List</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>

                        <th>Actions</th>
                    </tr>
                    <?php if (isset($userAdmins) && is_array($userAdmins)): ?>
                        <?php foreach ($userAdmins as $userAdmin): ?>
                            <tr>
                                <td><?= $userAdmin['User_admin_id'] ?></td>
                                <td><?= htmlspecialchars($userAdmin['Username_admin']) ?></td>
                                <td>
                                    <a href="?act=editUserAdmin&id=<?= $userAdmin['User_admin_id'] ?>" class="edit-btn">Sửa</a>
                                    <a href="?act=deleteUserAdmin&id=<?= $userAdmin['User_admin_id'] ?>" class="delete-btn"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No admins found.</td>
                        </tr>
                    <?php endif; ?>
                </table>
                <a href="?act=insertUserAdmin" class="btn">Add New Admin</a>
            </div>
        </div>
</body>


</html>