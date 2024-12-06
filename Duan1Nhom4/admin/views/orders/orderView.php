<!-- header -->
<?php include './views/layout/header.php'; ?>
<!-- header -->
<!-- <nav>
    <?php include './views/layout/navbar.php'; ?>
  </nav> -->

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}
</style>

<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng chi tiết cho Order ID: <?= $order['Order_id']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <p>User ID: <?= $order['user_id']; ?></p>
                    <p>giá trị sản phẩm: <?= $order['Total_Price']; ?> đ</p>
                    <p>Địa chỉ giao hàng: <?= $order['Delivery_address']; ?></p>
                    <p>Ghi chú: <?= $order['Note']; ?></p>
                    <p>Trạng thái: <?= $statusList[$order['status_id']] ?? 'Unknown'; ?></p>
                    <form action="?act=updateOrderStatus&order_id=<?= $order['Order_id']; ?>" method="POST">
                        <label for="status">Chọn trạng thái mới:</label>
                        <select name="status" id="status">
                            <?php foreach ($statusList as $id => $status): ?>
                            <option value="<?= $id; ?>" <?= $id == $order['status_id'] ? 'selected' : ''; ?>>
                                <?= $status; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit">Cập nhật trạng thái</button>
                    </form>
                    <h2>Đơn hàng chi tiết</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>

                                <th>Tổng giá đơn hàng</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orderDetails as $detail): ?>
                            <tr>
                                <td><?= $detail['Product_id']; ?></td>
                                <td><?= $detail['Price']; ?> đ</td>
                                <td><?= $detail['Sale_quantity']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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