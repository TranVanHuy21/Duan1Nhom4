<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parent Category</title>
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
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form p {
            margin: 0.5rem 0;
            color: #555;
        }

        form input[type="text"] {
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
    </style>
</head>

<body>
    <?php require '/laragon/www/DuAnCellphoneS/admin/views/layout/header.php'; ?>
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
                <h2>Edit Parent Category</h2>
                <form method="POST" action="index.php?act=editParentCategory&id=<?= $parentCategory['id'] ?>">
                    <label for="ParentCategory_name">Parent Category Name:</label>
                    <input type="text" name="ParentCategory_name" id="ParentCategory_name"
                        value="<?= $parentCategory['parent_name'] ?>" required>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>