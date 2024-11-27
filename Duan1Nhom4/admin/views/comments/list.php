<!-- header -->
<?php include './views/layout/header.php'; ?>
<!-- header -->
<!-- <nav>
    <?php include './views/layout/navbar.php'; ?>
  </nav> -->



<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php'; ?>


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
                    <div class="card card-primary" style="padding: 10px">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách bình luận cho sản phẩm ID:
                                <?php echo htmlspecialchars($productId); ?>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php if (!empty($this->errorMessage)): ?>
                        <div class="error-message" style="color: red;">
                            <?php echo $this->errorMessage; ?>
                        </div>
                        <?php endif; ?>

                        <table style="padding: 10px">
                            <tr>
                                <th>ID Bình luận</th>
                                <th>Nội dung</th>
                                <th>Đánh giá</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php if (empty($comments)): ?>
                            <tr>
                                <td colspan="4">Không có bình luận nào.</td>
                            </tr>
                            <?php else: ?>
                            <?php foreach ($comments as $comment): ?>
                            <tr>
                                <td><?php echo $comment['Comment_id']; ?></td>
                                <td><?php echo htmlspecialchars($comment['Comment_content']); ?></td>
                                <td><?php echo $comment['rating']; ?></td>
                                <td>
                                    <form action="index.php?act=editComment&id=<?php echo $comment['Comment_id']; ?>"
                                        method="post">
                                        <input type="hidden" name="product_id"
                                            value="<?php echo $comment['product_id']; ?>">
                                        <button type="submit">Chỉnh sửa</button>
                                    </form>
                                    <form action="index.php?act=deleteComment&id=<?php echo $comment['Comment_id']; ?>"
                                        method="post">
                                        <input type="hidden" name="product_id"
                                            value="<?php echo $comment['product_id']; ?>">
                                        <button type="submit">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
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