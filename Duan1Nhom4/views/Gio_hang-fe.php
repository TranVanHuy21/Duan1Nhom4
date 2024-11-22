<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gio hang</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="page-product.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/news.css">
    <link rel="stylesheet" href="./assets/css/gio_hang.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./assets/js/script.js"></script>
</head>

<body>

    
    <!-- End Header -->
    <div class="container-box-cart">
        <div class="body-cart">
            <div class="cart-header">
                <a href="index.php">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </a>
                <div class="title">
                    GIỎ HÀNG CỦA BẠN
                </div>
            </div>
            <div class="btn-cart">
                <a href="/Cellpones/Gio_hang.html">Giỏ hàng</a>
            </div>
            <div class="listItem-super-cart">
                <div class="top">
                    <div>
                        <input type="checkbox" class="rounded-checkbox">

                    </div>
                    
                    <div class="check-box-title">
                        Chọn tất cả
                    </div>
                </div>
                 <div class="list-cart">
                <?php
                if(!empty($cartItems)) {
                    foreach($cartItems as $index => $item) {
                ?>
        <div class="cart-list-items">
            <div class="cart-item" data-id="<?= $item['id'] ?>" data-index="<?= $index ?>">
                <div class="item-top">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" class="rounded-checkbox" data-price="<?= $item['price'] ?>">
                    </div>
                    
                    <div class="img-item">
                        <img src="./admin/assets/images/uploads/<?= $item['image'] ?>" alt="<?= $item['name_product'] ?>">
                    </div>
                    
                    <div class="item-left">
                        <div class="item-left-top">
                            <div class="title"><?= $item['name_product'] ?></div>
                            <div class="delete-wrapper">
                                <form action="index.php?act=deleteCart" method="POST">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="delete-btn" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                                        <ion-icon name="trash-bin-outline"></ion-icon>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="item-left-bot">
                        <div class="price-quantity-wrapper">
                        <div class="price"><?= number_format($item['price'] , 0, ',', '.') ?>đ</div>
                        <div class="action">
                                    <button type="button" class="decrease-btn" onclick="updateQuantity(this, -1)">-</button>
                                    <input type="text" style="border:2px solid #00000066" class="quantity-input" value="<?= $item['quantity'] ?>" readonly>
                                    <button type="button" class="increase-btn" onclick="updateQuantity(this, 1)">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
        } else {
        echo '<div class="empty-cart">Giỏ hàng trống</div>';
        }
        ?>
</div>
</div>
    
        <div class="cart-summary">
            
            <div class="cart-total">Tổng tiền: <span>0đ</span></div>
                    <button class="checkout-btn" onclick="handleCheckout()">Mua ngay</button>
            </div>
                
                <script>
    // ... existing code ...

                // Thêm hàm xử lý thanh toán
                function handleCheckout() {
                    // Kiểm tra có sản phẩm được chọn không
                    const checkedItems = document.querySelectorAll('.rounded-checkbox:checked');
                    if (checkedItems.length === 0) {
                        alert('Vui lòng chọn ít nhất một sản phẩm để thanh toán');
                        return;
                    }

                    // Lấy ID của sản phẩm được chọn
                    const cartIds = Array.from(checkedItems).map(checkbox => {
                        return checkbox.closest('.cart-item').getAttribute('data-id');
                    });

                    // Chuyển thẳng đến trang checkout với nhiều cart_id
                    window.location.href = 'index.php?act=checkout&cart_ids=' + cartIds.join(',');
                }
            </script>

                <!-- Thêm vào cuối file, trước </body> -->
                <!-- <script src="./assets/js/cart.js"></script> -->
                
         <script>
                    // Chạy khi trang load xong
                    document.addEventListener('DOMContentLoaded', function() {
                        displayCart();
                    });

                    // Thêm function để xử lý tăng/giảm số lượng
                    function updateQuantity(button, change) {
                        const quantityInput = button.parentElement.querySelector('.quantity-input');
                        let currentQuantity = parseInt(quantityInput.value);
                        
                        // Đảm bảo số lượng không nhỏ hơn 1
                        if (currentQuantity + change >= 1) {
                            currentQuantity += change;
                            quantityInput.value = currentQuantity;
                            
                            // Cập nhật tổng tiền
                            updateTotalPrice();
                        }
                    }

                    // Hàm cập nhật tổng tiền
                    function updateTotalPrice() {
                        const checkedItems = document.querySelectorAll('.rounded-checkbox:checked');
                        let total = 0;
                        
                        checkedItems.forEach(checkbox => {
                            const price = parseFloat(checkbox.getAttribute('data-price'));
                            const quantityInput = checkbox.closest('.cart-item').querySelector('.quantity-input');
                            const quantity = parseInt(quantityInput.value);
                            total += price * quantity;
                        });
                        
                        document.querySelector('.cart-total span').textContent = new Intl.NumberFormat('vi-VN', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(total);
                    }
        </script>
        </div>

    </div>

    </div>
    </div>
    
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->
    <script src="./assets/js/cart.js"></script>
</body>

</html>