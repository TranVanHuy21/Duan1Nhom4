<?php
class CommentModel
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=duanmau1', 'root', '');
    }
    public function getAllProducts()
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentsByProductId($productId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM comments WHERE product_id = :product_id");
        $stmt->execute(['product_id' => $productId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addComment($productId, $userId, $commentContent, $rating)
    {
        $stmt = $this->pdo->prepare("INSERT INTO comments (product_id, User_id, Comment_time, Comment_content, rating) VALUES (:product_id, :user_id, NOW(), :comment_content, :rating)");
        return $stmt->execute(['product_id' => $productId, 'user_id' => $userId, 'comment_content' => $commentContent, 'rating' => $rating]);
    }

    public function updateComment($commentId, $commentContent, $rating)
    {
        $stmt = $this->pdo->prepare("UPDATE comments SET Comment_content = :comment_content, rating = :rating WHERE Comment_id = :comment_id");
        return $stmt->execute(['comment_content' => $commentContent, 'rating' => $rating, 'comment_id' => $commentId]);
    }

    public function deleteComment($commentId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM comments WHERE Comment_id = :comment_id");
        return $stmt->execute(['comment_id' => $commentId]);
    }
}
?>