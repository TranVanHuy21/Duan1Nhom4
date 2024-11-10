<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
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
    </style>
</head>

<body>
    <?php
    require './views/header.php';
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
                <h2>Slide List</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($slides as $slide): ?>
                        <tr>
                            <td><?= $slide['id'] ?></td>
                            <td><?= htmlspecialchars($slide['title']) ?></td>
                            <td><img src="./assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                                    alt="<?= htmlspecialchars($slide['title']) ?>" width="100"></td>
                            <td><?= htmlspecialchars($slide['role_slide_id']) ?></td>
                            <td><?= htmlspecialchars($slide['description']) ?></td>
                            <td>
                                <a href="?act=showEditForm&id=<?= $slide['id'] ?>" class="btn btn-edit">Sửa</a>
                                <a href="?act=deleteSlide&id=<?= $slide['id'] ?>" class="btn btn-delete"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a href="?act=showInsertForm" class="btn">Add New Slide</a>
            </div>
        </div>
</body>

</html>