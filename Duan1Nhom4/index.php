<?php
ob_start(); 
// Bắt đầu phiên làm việc
session_start();
require_once 'commons/function.php';
require_once 'controllers/ClientController-client.php';
require_once 'controllers/ProductCateController.php';
require_once 'models/ClientModel-client.php';
require_once 'models/ProductCateModel.php';

// Khởi tạo các controller
$ClientProductCateController = new ClientProductCateController();
$clientController = new ClientController();

// Lấy hành động từ tham số GET, mặc định là 'home'
$act = $_GET['act'] ?? 'home';
$ids = [3, 4, 5, 6, 7, 8]; // Danh sách ID cho các danh mục cha

// Bao gồm header
include 'views/header-fe.php';

// Xử lý các hành động dựa trên tham số 'act'
switch ($act) {
    case 'home':
        // Hiển thị trang chủ và các sản phẩm giảm giá
        $clientController->showHome();
        $clientController->getMaxDiscountProduct();
        $clientController->showHomeParent($ids);
        break;

    case 'search':
        // Tìm kiếm sản phẩm
        $clientController->search();
        break;

    case 'showProductDetail':
        // Hiển thị chi tiết sản phẩm
        $id = $_GET['id'] ?? null;
        if ($id) {
            $clientController->showProductDetail($id);
            $clientController->topViewProduct($id);
        }
        break;

    case 'submit-comment':
        // Gửi bình luận
        $clientController->submitComment();
        break;

    case 'productByParent':
        // Lấy sản phẩm theo danh mục cha
        $id = $_GET['id'] ?? null;
        if ($id) {
            $ClientProductCateController->productsByParentId($id);
        }
        break;

    case 'productByCategory':
        // Lấy sản phẩm theo danh mục
        $id = $_GET['id'] ?? null;
        if ($id) {
            $ClientProductCateController->productsByCategory($id);
        }
        break;

    case 'login-client':
        // Đăng nhập khách hàng
        $clientController->login_client();
        break;

    case 'register-client':
        // Đăng ký khách hàng
        $clientController->register_client();
        break;

    case 'logout-client':
        // Đăng xuất khách hàng
        $clientController->logout_client();
        break;

    case 'forgotPassword':
        // Quên mật khẩu
        $clientController->forgotPassword();
        break;

    case 'viewCart':
        $clientController->viewCart();
        break;

    default:
        // Hành động mặc định là hiển thị trang chủ
        $clientController->showHome();
        break;
}

// Bao gồm footer
include 'views/footer-fe.php';
ob_end_flush();
?>