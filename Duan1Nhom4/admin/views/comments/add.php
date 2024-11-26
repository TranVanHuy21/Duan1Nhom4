<?php
// Giả sử $productId được truyền từ controller
?>
<h2>Thêm bình luận</h2>
<form action="index.php?act=addComment" method="post">
    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
    <label for="comment_content">Nội dung bình luận:</label>
    <textarea name="comment_content" required></textarea>

    <label for="rating">Đánh giá:</label>
    <input type="number" name="rating" min="1" max="5" required>

    <button type="submit">Gửi bình luận</button>
</form>