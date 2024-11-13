
<!-- header -->
<?php include './views/layout/header.php'; ?>
 <!-- header -->
  <!-- <nav>
    <?php include './views/layout/navbar.php';  ?>
  </nav> -->

  <!-- js  -->
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
  <!-- js  -->

  <!-- Main Sidebar Container -->
  <?php include './views/layout/sidebar.php';  ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Danh Mục</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Danh Mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?='http://localhost/DuanCellphoneS/admin/?act=listCategories' ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <label for="Category_name">Category Name:</label>
                    <input type="text" name="Category_name" placeholder="Nhập Tên Danh Mục">
                  </div>
                  <div class="form-group">
                  <label for="Parent_id">Parent Category:</label>
                  <select name="Parent_id">
                        <option value="0">None</option>
                        <?php foreach ($parentCategories as $parentCategory): ?>
                        <option value="<?= $parentCategory['id'] ?>"><?= $parentCategory['parent_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include './views/layout/footer.php'; ?>
 

</body>
</html>
