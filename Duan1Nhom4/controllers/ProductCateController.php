<?php
class ClientProductCateController
{
    private $clientProductCateModel;

    // Khởi tạo và kết nối cơ sở dữ liệu
    public function __construct()
    {
        $pdo = connectDB();
        $this->clientProductCateModel = new ClientModel($pdo);
    }

    // Lấy sản phẩm theo danh mục
    public function productsByCategory($id)
    {
        $categoryId = $this->getSanitizedId('id');
        if ($categoryId) {
            $pagination = $this->getPagination('page', 10);
            $productsByCategory = $this->clientProductCateModel->getProductsByCategoryIdDetail($categoryId, $pagination['itemsPerPage'], $pagination['offset']);
            $totalProducts = $this->clientProductCateModel->getTotalProductsByCategoryId($categoryId);
            $totalPages = ceil($totalProducts / $pagination['itemsPerPage']);
        }
        include './views/products_byCategory.php';
    }

    // Lấy sản phẩm theo danh mục cha
    public function productsByParentId($id)
    {
        $parentId = $this->getSanitizedId('id');
        if ($parentId) {
            $pagination = $this->getPagination('page', 10);
            $productsByParent = $this->clientProductCateModel->getProductsByParentId($parentId, $pagination['itemsPerPage'], $pagination['offset']);
            $totalProducts = $this->clientProductCateModel->getTotalProductsByParentId($parentId);
            $totalPages = ceil($totalProducts / $pagination['itemsPerPage']);
        }
        include './views/products_byCategory.php';
    }

    // Lấy và làm sạch ID từ yêu cầu GET
    private function getSanitizedId($param)
    {
        return isset($_GET[$param]) && !empty($_GET[$param]) ? htmlspecialchars($_GET[$param]) : false;
    }

    // Lấy thông tin phân trang
    private function getPagination($param, $defaultItemsPerPage)
    {
        $currentPage = isset($_GET[$param]) ? (int) $_GET[$param] : 1;
        $itemsPerPage = $defaultItemsPerPage;
        $offset = ($currentPage - 1) * $itemsPerPage;
        return ['currentPage' => $currentPage, 'itemsPerPage' => $itemsPerPage, 'offset' => $offset];
    }
}
?>