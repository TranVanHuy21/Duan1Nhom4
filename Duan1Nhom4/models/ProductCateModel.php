<?php
class ClientModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getProductsByParentId($parentId, $limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE parent_cate = :parentId LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':parentId', $parentId);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalProductsByParentId($parentId)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM products WHERE parent_cate = :parentId");
        $stmt->bindParam(':parentId', $parentId);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
?>