<?php
class CommentController
{
    public $commentModel;
    public $errorMessage;

    public function __construct()
    {
        $this->commentModel = new CommentModel();
    }

    public function listProductsComment()
    {
        $productsComment = $this->commentModel->getAllProducts();
        include './views/products/list.php'; // Tải view để liệt kê sản phẩm
    }

    public function listComments($productId)
    {
        // Lấy tất cả bình luận cho sản phẩm theo ID
        $comments = $this->commentModel->getCommentsByProductId($productId);

        // Kiểm tra xem có bình luận nào không
        if (empty($comments)) {
            $this->errorMessage = "Không có bình luận nào cho sản phẩm này.";
        }

        include './views/comments/list.php'; // Tải view để liệt kê bình luận
    }

    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $userId = $_SESSION['user']['User_id']; // Giả sử bạn đã lưu thông tin người dùng trong session
            $commentContent = $_POST['comment_content'] ?? null;
            $rating = $_POST['rating'] ?? null;

            // Xác thực dữ liệu
            if ($commentContent === null || $rating === null) {
                $this->errorMessage = "Nội dung bình luận và đánh giá là bắt buộc.";
                return;
            }

            $this->commentModel->addComment($productId, $userId, $commentContent, $rating);
            header("Location: index.php?act=listComments&product_id=" . urlencode($productId));
            exit();
        }
    }

    public function formEditComment($commentId)
    {
        $comment = $this->commentModel->getCommentById($commentId);

        // Kiểm tra xem bình luận có tồn tại không
        if (!$comment) {
            $this->errorMessage = "Bình luận không tồn tại hoặc đã bị xóa.";
        }

        include './views/comments/edit.php'; // Tải view để chỉnh sửa bình luận
    }

    public function editComment($commentId)
    {
        // Tải bình luận để chỉnh sửa
        $comment = $this->commentModel->getCommentById($commentId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Kiểm tra xem dữ liệu từ form có được gửi hay không
            $commentContent = $_POST['comment_content'] ?? null;
            $rating = $_POST['rating'] ?? null;

            // Xác thực dữ liệu
            if ($commentContent === null || $rating === null) {
                $this->errorMessage = "Nội dung bình luận và đánh giá là bắt buộc.";
                return;
            }

            // Tiến hành cập nhật bình luận trong cơ sở dữ liệu
            $this->commentModel->updateComment($commentId, $commentContent, $rating);
            header("Location: index.php?act=listComments&product_id=" . urlencode($_POST['product_id']));
            exit();
        }

        // Kiểm tra xem bình luận có tồn tại không
        if (!$comment) {
            $this->errorMessage = "Bình luận không tồn tại hoặc đã bị xóa.";
        }

        include './views/comments/edit.php'; // Tải view để chỉnh sửa bình luận
    }

    public function deleteComment($commentId)
    {
        // Lấy product_id từ query string
        $productId = $_GET['product_id'] ?? null;

        // Xóa bình luận
        $this->commentModel->deleteComment($commentId);

        // Chuyển hướng về danh sách bình luận cho sản phẩm
        header("Location: index.php?act=listComments&product_id=" . urlencode($productId));
        exit();
    }
}
?>