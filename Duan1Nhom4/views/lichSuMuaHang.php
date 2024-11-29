<?php
// Lấy thông tin người dùng
$userId = $_SESSION['user']['User_id'];
$userProfile = $this->clientModel->getUserAccount($userId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lịch sử đơn hàng</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/lichSuMuaHang.css">
</head>
<body>
  <div class="order-history">
    <div class="text-center mb-4">
        <img  src="./assets/image/poly.png" alt="" class="avarta">
    <div>
    <h3><?php echo htmlspecialchars($userProfile['username']); ?></h3>
    <p><?php echo htmlspecialchars($userProfile['phone_number']); ?></p>

    </div>
    </div>

    <div class="d-flex justify-content-around mb-3">
      <div>
        <h4>2</h4>
        <p>Đơn hàng</p>
      </div>
      <div>
        <h4 style="padding-left: 29px;">0đ</h4>
        <p>Tổng tiền tích lũy</p>
      </div>
    </div>

    <!-- Bộ lọc -->
    <div class="d-flex  mb-3 all">
      <button class="btn btn-danger">Tất cả</button>
      <button class="btn btn-outline-secondary">Chờ xác nhận</button>
      <button class="btn btn-outline-secondary">Đã xác nhận</button>
      <button class="btn btn-outline-secondary">Đang vận chuyển</button>
      <button class="btn btn-outline-secondary">Đã giao hàng</button>
      <button class="btn btn-outline-secondary">Đã hủy</button>
    </div>

    <!-- Đơn hàng -->
    <?php if ($donHangs && is_array($donHangs)): ?>
      <?php foreach ($donHangs as $donHang): ?>
    <div class="order-card">
    
            <div class="row">
                <div class="col-md-2 product-info">
                    <img src="./admin/assets/images/uploads/<?= htmlspecialchars($donHang['image']) ?>"  alt="Hình ảnh sản phẩm">
                </div>
                <div class="col-md-8">
                    <h5><?= htmlspecialchars($donHang['product_name']) ?></h5>
                    <p class="order-status"><?= htmlspecialchars($donHang['status_name']) ?></p>
                    <p class="text-danger price"><?= number_format($donHang['Total_Price'], 0, ',', '.') ?>đ</p>
                </div>
                <div class="col-md-2 text-end doc">
                    <p class='date'><?= htmlspecialchars($donHang['create_date']) ?></p>
                    <a href="#" class="detail">Xem chi tiết</a>
                </div>
            </div>
     
</div>
<?php endforeach ?>
    <?php else: ?>
        <p class="text-center">Không có đơn hàng nào!</p>
    <?php endif; ?>


   

  </div>

</body>
</html>
