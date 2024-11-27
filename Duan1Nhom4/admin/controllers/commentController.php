<?php
class CommentController
{
    public $commentModel;
    public $productModel;

    public function __construct()
    {
        $pdo = connectDB();

        $this->commentModel = new CommentModel();
        // $this->productModel = new ProductModel(connectDB());

    }
    public function listProductsComment()
    {
        $productsComment = $this->commentModel->getAllProducts();
        include './views/products/list.php'; // Tải view để liệt kê sản phẩm
    }
    public function listComments($productId)
    {
        $comments = $this->commentModel->getCommentsByProductId($productId);
        include './views/comments/list.php'; // Tải view để liệt kê bình luận
    }

    public function addComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $userId = $_SESSION['user']['User_id']; // Giả sử bạn đã lưu thông tin người dùng trong session
            $commentContent = $_POST['comment_content'];
            $rating = $_POST['rating'];

            $this->commentModel->addComment($productId, $userId, $commentContent, $rating);
            header("Location: index.php?act=listComments&product_id=" . urlencode($productId));
            exit();
        }
    }

    public function editComment($commentId)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $commentContent = $_POST['comment_content'];
            $rating = $_POST['rating'];

            $this->commentModel->updateComment($commentId, $commentContent, $rating);
            header("Location: index.php?act=listComments&product_id=" . urlencode($_POST['product_id']));
            exit();
        }
        // Tải bình luận để chỉnh sửa
        $comment = $this->commentModel->getCommentById($commentId);
        include './views/comments/edit.php'; // Tải view để chỉnh sửa bình luận
    }

    public function deleteComment($commentId)
    {
        $this->commentModel->deleteComment($commentId);
        header("Location: index.php?act=listComments&product_id=" . urlencode($_POST['product_id']));
        exit();
    }
}
?>