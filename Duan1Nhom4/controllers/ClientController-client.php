<?php
class ClientController
{
    private $clientModel;

    // Sử dụng Dependency Injection cho model
    public function __construct(ClientModel $clientModel)
    {
        $this->clientModel = $clientModel;
    }

    // Ví dụ về phương thức được tái cấu trúc sử dụng các hàm trợ giúp
    public function showHome()
    {
        $data = [
            'endTime' => $this->clientModel->getEndTime(), // Lấy thời gian kết thúc
            'maxDiscountProduct' => $this->clientModel->getProductWithMaxDiscount(), // Lấy sản phẩm giảm giá cao nhất
            'categories' => $this->getAllCategories(), // Lấy tất cả danh mục
            'topProducts' => $this->clientModel->getTopProducts(), // Lấy sản phẩm hàng đầu
            'slides' => $this->getAllSlides(), // Lấy tất cả slides
            'productsByParent' => $this->getProductsByParents([3, 4, 5, 6, 7, 8]) // Lấy sản phẩm theo danh mục cha
        ];
        $this->loadView('home-fe.php', $data); // Tải view
    }

    // Hàm trợ giúp để tải view
    private function loadView($view, $data = [])
    {
        extract($data);
        include "./views/{$view}";
    }

    // Hàm trợ giúp để lấy tất cả danh mục
    private function getAllCategories()
    {
        $parentCategories = $this->clientModel->getAllParentCategories();
        $categories = [];
        foreach ($parentCategories as $parentCategory) {
            $categories[$parentCategory['id']] = $this->clientModel->getCategoriesByParentIdClient($parentCategory['id']);
        }
        return $categories;
    }

    // Hàm trợ giúp để lấy tất cả slides
    private function getAllSlides()
    {
        $slides = [];
        for ($i = 1; $i <= 10; $i++) {
            $slides["slides{$i}"] = $this->clientModel->{"getAllSlidesId_$i"}();
        }
        return $slides;
    }

    // Hàm trợ giúp để lấy sản phẩm theo ID danh mục cha
    private function getProductsByParents(array $parentIds)
    {
        $products = [];
        foreach ($parentIds as $parentId) {
            $products[$parentId] = $this->clientModel->getProductsByParent($parentId);
        }
        return $products;
    }
}