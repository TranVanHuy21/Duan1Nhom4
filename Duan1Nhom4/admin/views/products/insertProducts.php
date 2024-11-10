<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
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
    <script>
    document.querySelector('form').addEventListener('submit', function(event) {
        let errors = [];
        let fields = ['Name_product', 'Title', 'Screen', 'Price', 'Quanlity', 'Size', 'Weight', 'Color',
            'Image', 'Memory', 'Os', 'Cpu_speed', 'Camera_primary', 'Camera_secondary', 'Battery',
            'Warranty', 'Bluetooth', 'Promotion_price', 'Start_promotion', 'End_promotion', 'Wlan',
            'discount', 'like_view', 'id', 'Detail', 'Description'
        ];

        fields.forEach(function(field) {
            let input = document.getElementById(field);
            let errorMessage = document.getElementById('error-' + field);
            errorMessage.textContent = ''; // Xóa lỗi cũ
            if (input && input.value.trim() === '') {
                let message = field + ' là bắt buộc.';
                errors.push(message);
                errorMessage.textContent = message; // Hiển thị lỗi ngay cạnh trường nhập
            }
        });

        if (errors.length > 0) {
            event.preventDefault(); // Ngăn chặn gửi form nếu có lỗi
        }
    });
    </script>
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
                    <li><a href="?act=listSlides">Quản trị Slide</a></li>
                    <li><a href="?act=listUsers">Quản trị người dùng</a></li>
                    <li><a href="?act=listUserAdmins">Quản trị admin</a></li>
                    <li><a href="">Thoát</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <h2>Thêm mới sản phẩm</h2>

            <form action="?act=insertProduct" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div>
                        <label for="Name_product">Tên Sản Phẩm</label>
                        <input type="text" id="Name_product" name="Name_product">
                        <span class="error-message" id="error-Name_product"></span>
                    </div>
                    <div>
                        <label for="Title">Tiêu đề sản phẩm</label>
                        <input type="text" id="Title" name="Title">
                        <span class="error-message" id="error-Title"></span>
                    </div>
                    <div class="full-width">
                        <div id="error-container"></div>
                        <label for=" Description">Mô tả</label>
                        <input type="text" id="Description" name="Description">
                    </div>

                    <div>
                        <label for="Price">Giá</label>
                        <input type="text" id="Price" name="Price">
                        <span class="error-message" id="error-Price"></span>
                    </div>
                    <div>
                        <label for="Quanlity">Số lượng</label>
                        <input type="number" id="Quanlity" name="Quanlity">
                        <span class="error-message" id="error-Quanlity"></span>
                    </div>
                    <div class="full-width">
                        <label for="parent">Danh mục </label>
                        <select name="parent_cate" id="">
                            <option value="3">Điện Thoại</option>
                            <option value="4">Máy Tính</option>
                            <option value="5">Máy Tính Bảng</option>
                            <option value="6">Âm Thanh</option>
                            <option value="7">Đồng Hồ Thông Minh</option>
                            <option value="8">Đồ Gia Dụng</option>
                            <option value="9">Phụ kiện</option>
                            <option value="10">Tivi</option>
                            <option value="11">Hàng Cũ</option>
                        </select>
                    </div>
                    <div>
                        <label for="Size">Kích thước</label>
                        <input type="text" id="Size" name="Size">
                        <span class="error-message" id="error-Size"></span>
                    </div>
                    <div>
                        <label for="Weight">Trọng lượng</label>
                        <input type="text" id="Weight" name="Weight">
                        <span class="error-message" id="error-Weight"></span>
                    </div>
                    <div>
                        <label for="Color">Màu sắc</label>
                        <input type="text" id="Color" name="Color">
                        <span class="error-message" id="error-Color"></span>
                    </div>
                    <div>
                        <label for="Image">Ảnh</label>
                        <input type="file" id="Image" name="Image">
                        <span class="error-message" id="error-Image"></span>
                    </div>
                    <div>
                        <label for="Memory">Bộ nhớ RAM</label>
                        <input type="text" id="Memory" name="Memory">
                        <span class="error-message" id="error-Memory"></span>
                    </div>
                    <div>
                        <label for="Os">Hệ điều hành</label>
                        <input type="text" id="Os" name="Os">
                        <span class="error-message" id="error-Os"></span>
                    </div>
                    <div>
                        <label for="Cpu_speed">Tốc độ CPU</label>
                        <input type="text" id="Cpu_speed" name="Cpu_speed">
                        <span class="error-message" id="error-Cpu_speed"></span>
                    </div>
                    <div>
                        <label for="Camera_primary">Camera trước</label>
                        <input type="text" id="Camera_primary" name="Camera_primary">
                        <span class="error-message" id="error-Camera_primary"></span>
                    </div>
                    <div>
                        <label for="Camera_secondary">Camera sau</label>
                        <input type="text" id="Camera_secondary" name="Camera_secondary">
                        <span class="error-message" id="error-Camera_secondary"></span>
                    </div>
                    <div>
                        <label for="Battery">Pin</label>
                        <input type="text" id="Battery" name="Battery">
                        <span class="error-message" id="error-Battery"></span>
                    </div>
                    <div>
                        <label for="Warranty">Bảo hành</label>
                        <input type="text" id="Warranty" name="Warranty">
                        <span class="error-message" id="error-Warranty"></span>
                    </div>
                    <div>
                        <label for="Bluetooth">Bluetooth</label>
                        <input type="text" id="Bluetooth" name="Bluetooth">
                        <span class="error-message" id="error-Bluetooth"></span>
                    </div>
                    <div>
                        <label for="Promotion_price">Giá khuyến mãi</label>
                        <input type="text" id="Promotion_price" name="Promotion_price">
                        <span class="error-message" id="error-Promotion_price"></span>
                    </div>
                    <div>
                        <label for="Start_promotion">Ngày bắt đầu khuyến mãi</label>
                        <input type="date" id="Start_promotion" name="Start_promotion">
                        <span class="error-message" id="error-Start_promotion"></span>
                    </div>
                    <div>
                        <label for="End_promotion">Ngày kết thúc khuyến mãi</label>
                        <input type="date" id="End_promotion" name="End_promotion">
                        <span class="error-message" id="error-End_promotion"></span>
                    </div>
                    <div>
                        <label for="Wlan">WLAN</label>
                        <input type="text" id="Wlan" name="Wlan">
                        <span class="error-message" id="error-Wlan"></span>
                    </div>
                    <div class="full-width">
                        <label for="id">Loại sản phẩm</label>
                        <select id="id" name="Id_cat">
                            <?php foreach ($categories as $cate): ?>
                            <option value="<?php echo $cate['id']; ?>">
                                <?php echo htmlspecialchars($cate['Category_name']) . ' (' . htmlspecialchars($cate['Parent_id']) . ')'; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="full-width">
                        <label for="Detail">Chi tiết khác</label>
                        <input type="text" id="Detail" name="Detail">
                    </div>
                    <div>
                        <label for="Screen">Màn hình</label>
                        <input type="text" id="Screen" name="Screen">
                        <span class="error-message" id="error-Screen"></span>
                    </div>
                    <div>
                        <label for="discount">Discount</label>
                        <input type="number" id="discount" name="discount">
                        <span class="error-message" id="error-discount"></span>
                    </div>




                    <div class="full-width">
                        <div id="error-container"></div>
                        <input type="submit" value="Thêm sản phẩm" name="btn_insert">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


</div>