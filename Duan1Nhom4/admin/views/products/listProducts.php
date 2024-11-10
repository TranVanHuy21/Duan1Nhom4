<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .box-views {
        width: 95%;
        margin: auto;
        background: #fff;
        padding: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow-x: auto;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }

    th,
    td {
        padding: 0.75rem;
        text-align: left;
        border: 1px solid #ddd;
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

    img {
        max-width: 50px;
        height: auto;
    }

    .btn {
        padding: 0.5rem 1rem;
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

    @media (max-width: 768px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        th {
            display: none;
            /* Hide headers on small screens */
        }

        tr {
            margin-bottom: 1rem;
        }

        td {
            text-align: right;
            position: relative;
            padding-left: 50%;
            /* Space for label */
        }

        td::before {
            content: attr(data-label);
            /* Use data-label for headers */
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 10px;
            text-align: left;
            font-weight: bold;
        }
    }

    .truncate {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 150px;
        /* Adjust width as needed */
    }

    .expandable {
        display: none;
    }

    .show-more {
        cursor: pointer;
        color: #5c67f2;
        text-decoration: underline;
    }

    .limited-height {
        max-height: 250px;
        /* Giới hạn chiều cao */
        width: 300px;
        /* Giới hạn chiều rộng */
        overflow: hidden;
        /* Ẩn nội dung vượt quá */
        position: relative;
        /* Để sử dụng cho nút xem thêm */
    }

    .expandable {
        display: none;
        /* Ẩn nội dung mở rộng */
    }

    .show-more {
        cursor: pointer;
        color: #5c67f2;
        text-decoration: underline;
        position: absolute;
        bottom: 0;
        /* Đặt nút ở dưới cùng */
        left: 0;
        background: white;
        /* Nền trắng cho nút */
        padding: 5px;
        /* Khoảng cách cho nút */
    }

    .sort-options {
        margin-bottom: 1rem;
        text-align: center;
    }

    .sort-options label {
        margin-right: 0.5rem;
    }

    .sort-options select {
        padding: 0.5rem;
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    </style>


    <script>
    function toggleDescription(element) {
        const container = element.parentElement;
        const description = container.querySelector('.expandable');

        if (description.style.display === "none") {
            description.style.display = "block"; // Hiển thị nội dung đầy đủ
            container.style.maxHeight = "none"; // Bỏ giới hạn chiều cao
            element.textContent = "Ẩn bớt"; // Thay đổi văn bản thành "Hide"
        } else {
            description.style.display = "none"; // Ẩn nội dung đầy đủ
            container.style.maxHeight = "250px"; // Đặt lại chiều cao giới hạn
            element.textContent = "Xem thêm"; // Thay đổi văn bản thành "Show more"
        }
    }

    function toggleColumn(columnClass) {
        var elements = document.getElementsByClassName(columnClass);
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = elements[i].style.display === 'none' ? '' : 'none';
        }
    }

    function sortByCategory(categoryId) {
        window.location.href = '?act=listProduct&categoryId=' + categoryId; // Redirect to filter by category
    }
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
        <div class="box-views">

            <h2>Product List</h2>
            <div class="sort-options">
                <label for="category-select">Sort by Category:</label>
                <select id="category-select" onchange="sortByCategory(this.value)">
                    <option value="">All Categories</option>
                    <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['Category_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div style="margin-bottom:20px"><a href="?act=insertProduct" class="btn">Thêm Mới Sản Phẩm</a></div>
            <div class="toggle-columns">
                <label><input type="checkbox" onclick="toggleColumn('col-description')" checked> Description</label>
                <label><input type="checkbox" onclick="toggleColumn('col-size')" checked> Size</label>
                <label><input type="checkbox" onclick="toggleColumn('col-weight')" checked> Weight</label>
                <label><input type="checkbox" onclick="toggleColumn('col-color')" checked> Color</label>
                <label><input type="checkbox" onclick="toggleColumn('col-memory')" checked> Memory</label>
                <label><input type="checkbox" onclick="toggleColumn('col-os')" checked> OS</label>
                <label><input type="checkbox" onclick="toggleColumn('col-cpu-speed')" checked> CPU Speed</label>
                <label><input type="checkbox" onclick="toggleColumn('col-camera-primary')" checked> Primary
                    Camera</label>
                <label><input type="checkbox" onclick="toggleColumn('col-camera-secondary')" checked> Secondary
                    Camera</label>
                <label><input type="checkbox" onclick="toggleColumn('col-battery')" checked> Battery</label>
                <label><input type="checkbox" onclick="toggleColumn('col-warranty')" checked> Warranty</label>
                <label><input type="checkbox" onclick="toggleColumn('col-bluetooth')" checked> Bluetooth</label>
                <label><input type="checkbox" onclick="toggleColumn('col-promotion-price')" checked> Promotion
                    Price</label>
                <label><input type="checkbox" onclick="toggleColumn('col-start-promotion')" checked> Start
                    Promotion</label>
                <label><input type="checkbox" onclick="toggleColumn('col-end-promotion')" checked> End
                    Promotion</label>
                <label><input type="checkbox" onclick="toggleColumn('col-wlan')" checked> WLAN</label>
                <label><input type="checkbox" onclick="toggleColumn('col-detail')" checked> Details</label>
                <label><input type="checkbox" onclick="toggleColumn('col-screen')" checked> Screen</label>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th class="col-description">Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="col-size">Size</th>
                        <th class="col-weight">Weight</th>
                        <th class="col-color">Color</th>
                        <th>Image</th>
                        <th class="col-memory">Memory</th>
                        <th class="col-os">OS</th>
                        <th class="col-cpu-speed">CPU Speed</th>
                        <th class="col-camera-primary">Primary Camera</th>
                        <th class="col-camera-secondary">Secondary Camera</th>
                        <th class="col-battery">Battery</th>
                        <th class="col-warranty">Warranty</th>
                        <th class="col-bluetooth">Bluetooth</th>
                        <th class="col-promotion-price">Promotion Price</th>
                        <th class="col-start-promotion">Start Promotion</th>
                        <th class="col-end-promotion">End Promotion</th>
                        <th class="col-wlan">WLAN</th>
                        <th>Category ID</th>
                        <th class="col-detail">Details</th>
                        <th class="col-screen">Screen</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($products) && is_array($products)): ?>
                    <?php foreach ($products as $row): ?>
                    <tr>
                        <td data-label="ID"><?= $row['id'] ?></td>
                        <td data-label="Name"><?= $row['Name_product'] ?></td>
                        <td data-label="Title"><?= $row['Title'] ?></td>
                        <td class="col-description" data-label="Description">
                            <div class="limited-height">
                                <span class="truncate"><?= $row['Description'] ?></span>
                                <span class="expandable"><?= $row['Description'] ?></span>
                                <span class="show-more" onclick="toggleDescription(this)">Xem thêm</span>
                            </div>
                        </td>
                        <td data-label="Price"><?= $row['Price'] ?></td>
                        <td data-label="Quantity"><?= $row['Quanlity'] ?></td>
                        <td class="col-size" data-label="Size"><?= $row['Size'] ?></td>
                        <td class="col-weight" data-label="Weight"><?= $row['Weight'] ?></td>
                        <td class="col-color" data-label="Color"><?= $row['Color'] ?></td>
                        <td data-label="Image"><img src="./assets/images/uploads/<?= htmlspecialchars($row['Image']) ?>"
                                alt="Product Image" height="50"></td>
                        <td class="col-memory" data-label="Memory"><?= $row['Memory'] ?></td>
                        <td class="col-os" data-label="OS"><?= $row['Os'] ?></td>
                        <td class="col-cpu-speed" data-label="CPU Speed"><?= $row['Cpu_speed'] ?></td>
                        <td class="col-camera-primary" data-label="Primary Camera"><?= $row['Camera_primary'] ?></td>
                        <td class="col-camera-secondary" data-label="Secondary Camera"><?= $row['Camera_secondary'] ?>
                        </td>
                        <td class="col-battery" data-label="Battery"><?= $row['Battery'] ?></td>
                        <td class="col-warranty" data-label="Warranty"><?= $row['Warranty'] ?></td>
                        <td class="col-bluetooth" data-label="Bluetooth"><?= $row['Bluetooth'] ?></td>
                        <td class="col-promotion-price" data-label="Promotion Price"><?= $row['Promotion_price'] ?></td>
                        <td class="col-start-promotion" data-label="Start Promotion"><?= $row['Start_promotion'] ?></td>
                        <td class="col-end-promotion" data-label="End Promotion"><?= $row['End_promotion'] ?></td>
                        <td class="col-wlan" data-label="WLAN"><?= $row['Wlan'] ?></td>
                        <td data-label="Category ID"><?= $row['Id_cat'] ?></td>
                        <td class="col-detail" data-label="Details"><?= $row['Detail'] ?></td>
                        <td class="col-screen" data-label="Screen"><?= $row['Screen'] ?></td>
                        <td data-label="Actions">
                            <a href="?act=editProduct&id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                            <a href="?act=deleteProduct&id=<?= $row['id'] ?>" class="btn btn-delete"
                                onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="26">No products found.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>