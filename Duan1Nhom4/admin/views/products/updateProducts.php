<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
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

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 2rem;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group div {
            width: 48%;
            margin-bottom: 1rem;
        }

        .form-group div.full-width {
            width: 90%;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group input[type="number"],
        .form-group input[type="date"],
        .form-group select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="submit"] {
            background-color: #5c67f2;
            color: #fff;
            border: none;
            padding: 0.75rem;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }

        .form-group input[type="submit"]:hover {
            background-color: #5058e2;
        }
    </style>
</head>

<body>
    <?php
    require '/laragon/www/Duan1Nhom4/Duan1Nhom4/admin/views/layout/header.php';
    ;
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
            <div class="content">
                <h2>Cập nhật sản phẩm</h2>
                <form action="?act=updateProduct&id=<?= $products['id'] ?>" class="update" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <div>
                            <label for="Name_product">Tên Sản Phẩm</label>
                            <input type="text" id="Name_product" name="Name_product"
                                value="<?= htmlspecialchars($products['Name_product'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Title">Tiêu đề sản phẩm</label>
                            <input type="text" id="Title" name="Title"
                                value="<?= htmlspecialchars($products['Title'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Screen">Màn hình</label>
                            <input type="text" id="Screen" name="Screen"
                                value="<?= htmlspecialchars($products['Screen'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Price">Giá</label>
                            <input type="text" id="Price" name="Price"
                                value="<?= htmlspecialchars($products['Price'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Quanlity">Số lượng</label>
                            <input type="number" id="Quanlity" name="Quanlity"
                                value="<?= htmlspecialchars($products['Quanlity'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Size">Kích thước</label>
                            <input type="text" id="Size" name="Size"
                                value="<?= htmlspecialchars($products['Size'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Weight">Trọng lượng</label>
                            <input type="text" id="Weight" name="Weight"
                                value="<?= htmlspecialchars($products['Weight'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Color">Màu sắc</label>
                            <input type="text" id="Color" name="Color"
                                value="<?= htmlspecialchars($products['Color'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Image">Ảnh</label>
                            <input type="file" id="Image" name="Image">
                            <p>Ảnh hiện tại</p><img src="./assets/images/uploads/<?= $products['Image'] ?>"
                                alt="Product Image" height="100">
                        </div>
                        <div>
                            <label for="Memory">Bộ nhớ RAM</label>
                            <input type="text" id="Memory" name="Memory"
                                value="<?= htmlspecialchars($products['Memory'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Os">Hệ điều hành</label>
                            <input type="text" id="Os" name="Os" value="<?= htmlspecialchars($products['Os'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Cpu_speed">Tốc độ CPU</label>
                            <input type="text" id="Cpu_speed" name="Cpu_speed"
                                value="<?= htmlspecialchars($products['Cpu_speed'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Camera_primary">Camera trước</label>
                            <input type="text" id="Camera_primary" name="Camera_primary"
                                value="<?= htmlspecialchars($products['Camera_primary'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Camera_secondary">Camera sau</label>
                            <input type="text" id="Camera_secondary" name="Camera_secondary"
                                value="<?= htmlspecialchars($products['Camera_secondary'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Battery">Pin</label>
                            <input type="text" id="Battery" name="Battery"
                                value="<?= htmlspecialchars($products['Battery'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Warranty">Bảo hành</label>
                            <input type="text" id="Warranty" name="Warranty"
                                value="<?= htmlspecialchars($products['Warranty'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Bluetooth">Bluetooth</label>
                            <input type="text" id="Bluetooth" name="Bluetooth"
                                value="<?= htmlspecialchars($products['Bluetooth'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Promotion_price">Giá khuyến mãi</label>
                            <input type="text" id="Promotion_price" name="Promotion_price"
                                value="<?= htmlspecialchars($products['Promotion_price'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Start_promotion">Ngày bắt đầu khuyến mãi</label>
                            <input type="date" id="Start_promotion" name="Start_promotion"
                                value="<?= htmlspecialchars($products['Start_promotion'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="End_promotion">Ngày kết thúc khuyến mãi</label>
                            <input type="date" id="End_promotion" name="End_promotion"
                                value="<?= htmlspecialchars($products['End_promotion'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="Wlan">WLAN</label>
                            <input type="text" id="Wlan" name="Wlan"
                                value="<?= htmlspecialchars($products['Wlan'] ?? '') ?>">
                        </div>
                        <div>
                            <label for="discount">Discount</label>
                            <input type="number" id="discount" name="discount"
                                value="<?= htmlspecialchars($products['discount'] ?? '') ?>">
                            <span class="error-message" id="error-discount"></span>
                        </div>

                        <div class="full-width">
                            <label for="Id_cat">Loại sản phẩm</label>
                            <select id="Id_cat" name="Id_cat">
                                <?php foreach ($categories as $cate): ?>
                                    <option value="<?= $cate['id'] ?>" <?= $cate['id'] == $products['Id_cat'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($cate['Category_name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="full-width">
                            <label for="Detail">Chi tiết khác</label>
                            <input type="text" id="Detail" name="Detail"
                                value="<?= htmlspecialchars($products['Detail'] ?? '') ?>">
                        </div>
                        <div class="full-width">
                            <label for="Description">Mô tả</label>
                            <input type="text" id="Description" name="Description"
                                value="<?= htmlspecialchars($products['Description'] ?? '') ?>">
                        </div>
                        <div class="full-width">
                            <input type="submit" value="Cập nhật sản phẩm" name="btn_update">
                        </div>
                    </div>




            </div>
        </div>

</body>

</html>