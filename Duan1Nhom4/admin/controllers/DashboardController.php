<?php
require_once 'models/ProductModel.php';

class DashboardController
{
    private $productModel;

    public function __construct()
    {
        $pdo = connectDB();
        $this->productModel = new ProductModel($pdo);
    }

    public function showDashboard()
    {
        require_once '../admin/views/dashBoard.php';
    }
}

?>