
<!-- header -->
<?php include './views/layout/header.php'; ?>
 <!-- header -->
  <!-- <nav>
    <?php include './views/layout/navbar.php';  ?>
  </nav> -->

  

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
