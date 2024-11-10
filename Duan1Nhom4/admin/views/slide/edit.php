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
        max-width: 600px;
        margin: 1rem auto;
        padding: 2rem 2rem 4rem 2rem;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    select,
    input[type="file"] {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    button {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
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
                <h2>Edit Slide</h2>
                <form action="?act=updateSlide" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $slide['id'] ?>">

                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="<?= htmlspecialchars($slide['title']) ?>"
                        required>

                    <label for="description">Description:</label>
                    <textarea name="description" id="description"
                        required><?= htmlspecialchars($slide['description']) ?></textarea>

                    <label for="role_slide_id">Role:</label>
                    <select name="role_slide_id" id="role_slide_id" required>
                        <?php foreach ($roles as $role): ?>
                        <option value="<?= $role['role_slide_id'] ?>"
                            <?= $role['role_slide_id'] == $slide['role_slide_id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($role['role_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>

                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image">
                    <input type="hidden" name="existing_image" value="<?= htmlspecialchars($slide['image']) ?>">

                    <button type="submit">Update Slide</button>
                </form>
            </div>
        </div>

</body>

</html>