document.addEventListener('DOMContentLoaded', function() {
    // Lấy các elements
    const selectAllCheckbox = document.querySelector('.listItem-super-cart .top .rounded-checkbox');
    const itemCheckboxes = document.querySelectorAll('.cart-item .rounded-checkbox');
    const quantityContainers = document.querySelectorAll('.action');

    // 1. Xử lý checkbox "Chọn tất cả"
    if(selectAllCheckbox) {
        selectAllCheckbox.onclick = function() {
            itemCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            calculateTotal();
        }
    }

    // 2. Xử lý checkbox từng sản phẩm
    itemCheckboxes.forEach(checkbox => {
        checkbox.onclick = function() {
            calculateTotal();
            // Kiểm tra nếu tất cả checkbox con được chọn
            const allChecked = Array.from(itemCheckboxes).every(cb => cb.checked);
            if(selectAllCheckbox) {
                selectAllCheckbox.checked = allChecked;
            }
        }
    });

    
    // 3. Xử lý tăng giảm số lượng
    document.addEventListener('DOMContentLoaded', function() {
        // Gắn sự kiện cho tất cả nút xóa
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.onclick = function() {
                const cartId = this.dataset.id;
                deleteCartItem(cartId);
            };
        });
    });

    // Xử lý nút xóa
  

function deleteCartItem(cartId) {
    if(confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
        $.ajax({
            url: 'index.php?act=deletecart',
            method: 'POST',
            data: { id_cart: cartId },
            success: function(response) {
                try {
                    const result = JSON.parse(response);
                    if(result.success) {
                        // Xóa item khỏi DOM
                        const cartItem = document.querySelector(`.cart-item[data-id="${cartId}"]`);
                        if(cartItem) {
                            cartItem.remove();
                            // Cập nhật tổng tiền
                            calculateTotal();
                            
                            // Kiểm tra giỏ hàng trống
                            if(document.querySelectorAll('.cart-item').length === 0) {
                                document.querySelector('.list-cart').innerHTML = `
                                    <div class="empty-cart">
                                        <p>Giỏ hàng của bạn đang trống</p>
                                        <a href="index.php" class="continue-shopping">Tiếp tục mua sắm</a>
                                    </div>
                                `;
                            }
                            
                            // Thông báo xóa thành công
                            alert('Đã xóa sản phẩm khỏi giỏ hàng!');
                        }
                    } else {
                        alert('Không thể xóa sản phẩm');
                    }
                } catch(e) {
                    console.error('Error:', e);
                    alert('Đã có lỗi xảy ra');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Không thể kết nối đến server');
            }
        });
    }
}

// Hàm lấy giá trị số từ text
function getPriceValue(element) {
    return parseInt(element.textContent.replace(/[^\d]/g, ''));
}

// Hàm cập nhật giá cho một sản phẩm
function updateItemPrice(element, basePrice, quantity) {
    element.textContent = formatPrice(basePrice * quantity);
}

// Hàm tính tổng tiền các sản phẩm được chọn
function calculateTotal() {
    let total = 0;
    const checkedItems = document.querySelectorAll('.cart-item .rounded-checkbox:checked');
    
    checkedItems.forEach(checkbox => {
        const cartItem = checkbox.closest('.cart-item');
        const priceElement = cartItem.querySelector('.price');
        if(priceElement) {
            total += getPriceValue(priceElement);
        }
    });

    // Cập nhật hiển thị tổng tiền
    const totalElement = document.querySelector('.cart-total span');
    if(totalElement) {
        totalElement.textContent = formatPrice(total);
    }
}

// Hàm format giá tiền
function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN').format(price) + 'đ';
}

});