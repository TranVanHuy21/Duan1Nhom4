<!-- header -->
<?php include './views/layout/header.php'; ?>
 <!-- header -->
  <!-- <nav>
    <?php include './views/layout/navbar.php';  ?>
  </nav> -->

  

  <!-- Main Sidebar Container -->
  <?php include './views/layout/sidebar.php';  ?>
  
<!-- js  -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<body>
    
        <div class="box-views">
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
        </div>

</body>

</html>