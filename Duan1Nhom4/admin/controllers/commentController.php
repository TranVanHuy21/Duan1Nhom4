<?php
class CommentController
{
    private $commentModel;

    public function __construct()
    {

        $this->commentModel = new CommentModel();
    }

    public function listComments($productId)
    {
        $comments = $this->commentModel->getCommentsByProductId($productId);
        include './views/comments/list.php'; // View để liệt kê bình luận
    }
    public function showAddCommentForm($productId)
    {

        include './views/comments/add.php'; // Tải view để thêm bình luận
    }
    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $userId = $_SESSION['user']['User_id'];
            $commentContent = $_POST['comment_content'];
            $rating = $_POST['rating'];

            $this->commentModel->addComment($productId, $userId, $commentContent, $rating);
            header("Location: index.php?act=showProductDetail&id=" . urlencode($productId));
            exit();
        }
    }

    public function editComment($commentId)
    {
        // Kiểm tra xem có yêu cầu POST không
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $commentContent = $_POST['comment_content'];
            $rating = $_POST['rating'];

            // Cập nhật bình luận
            $this->commentModel->updateComment($commentId, $commentContent, $rating);
            header("Location: index.php?act=showProductDetail&id=" . urlencode($_POST['product_id']));
            exit();
        }

        // Tải bình luận để chỉnh sửa
        $comment = $this->commentModel->getCommentById($commentId);
        if (!$comment) {
            // Nếu không tìm thấy bình luận, chuyển hướng về trang chi tiết sản phẩm
            header("Location: index.php?act=showProductDetail&id=" . urlencode($_GET['product_id']));
            exit();
        }

        // Hiển thị biểu mẫu chỉnh sửa bình luận
        include './views/comments/edit.php'; // Tải view để chỉnh sửa bình luận
    }

    public function deleteComment($commentId)
    {
        $this->commentModel->deleteComment($commentId);
        header("Location: index.php?act=viewComments&product_id=" . urlencode($_POST['product_id']));
        exit();
    }
}
?>