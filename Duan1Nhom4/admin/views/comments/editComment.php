<?php

?>
<h2>Chỉnh sửa bình luận</h2>
<form action="index.php?act=editComment&id=<?php echo $comment['Comment_id']; ?>" method="post">
    <input type="hidden" name="product_id" value="<?php echo $comment['product_id']; ?>">
    <label for="comment_content">Nội dung bình luận:</label>
    <textarea name="comment_content" required><?php echo htmlspecialchars($comment['Comment_content']); ?></textarea>

    <label for="rating">Đánh giá:</label>
    <input type="number" name="rating" min="1" max="5" value="<?php echo $comment['rating']; ?>" required>

    <button type="submit">Cập nhật</button>
</form>