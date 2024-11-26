<?php

?>
<h2>Danh sách bình luận</h2>
<table>
    <tr>
        <th>ID Bình luận</th>
        <th>Nội dung</th>
        <th>Đánh giá</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?php echo $comment['Comment_id']; ?></td>
            <td><?php echo htmlspecialchars($comment['Comment_content']); ?></td>
            <td><?php echo $comment['rating']; ?></td>
            <td>
                <form action="index.php?act=editComment&id=<?php echo $comment['Comment_id']; ?>" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $comment['product_id']; ?>">
                    <button type="submit">Chỉnh sửa</button>
                </form>
                <form action="index.php?act=deleteComment&id=<?php echo $comment['Comment_id']; ?>" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $comment['product_id']; ?>">
                    <button type="submit">Xóa</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Thêm bình luận</h3>
<form action="index.php?act=addComment" method="post">
    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
    <textarea name="comment_content" required></textarea>
    <input type="number" name="rating" min="1" max="5" required>
    <button type="submit">Gửi</button>
</form>