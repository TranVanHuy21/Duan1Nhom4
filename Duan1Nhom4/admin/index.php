<?php
session_start();
ob_start();
require_once '../commons/function.php';
require_once 'controllers/DashboardController.php';
require_once 'models/DashboardModel.php';
require_once 'controllers/ProductController.php';
require_once 'models/ProductModel.php';
require_once 'controllers/CategoryController.php';
require_once 'models/CategoryModel.php';
require_once 'controllers/UserAdminController.php';
require_once 'models/UserAdminModel.php';
require_once 'controllers/UserController.php';
require_once 'models/UserModel.php';
require_once 'controllers/accController.php';
require_once 'models/accModel.php';
require_once 'models/SlideModel.php';
require_once 'controllers/SlideController.php';
require_once 'controllers/commentController.php';
require_once 'models/commentModel.php';
// require_once 'controllers/ParentCategoryController.php'; 



$productController = new ProductController();
$categoryController = new CategoryController();
$parentCategoryController = new CategoryController();
$userAdminController = new UserAdminController();
$userController = new UserController();
$accController = new accController();
$dashboardController = new DashboardController();
$slideModel = new SlideModel();
$slideController = new SlideController();
$commentController = new CommentController();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user_admin']) && (!isset($_GET['act']) || $_GET['act'] != 'login')) {
    header("Location: ../admin/index.php?act=login");
    exit();
}
$act = isset($_GET['act']) ? $_GET['act'] : 'dashboard';


switch ($act) {
    case 'login':
        $accController->login();
        break;
    case 'logout':
        $accController->logout();
    // case 'home':
    //     $DashboardController->showDashboard();
    //     break;
    case 'listProduct':
        $productController->listProducts();
        break;
    case 'insertProduct':
        $productController->insertProduct();
        break;
    case 'editProduct':
        $id = $_GET['id'];
        $productController->loadViewEditProduct($id);
        break;
    case 'deleteProduct':
        $id = $_GET['id'];
        $productController->deleteProduct($id);
        break;
    case 'updateProduct':
        $id = $_GET['id'];
        $productController->updateProduct($id);
        break;

    case 'listCategories':
        $categoryController->displayCategories();
        break;
    case 'addCategory':
        $categoryController->addCategory();
        break;
    case 'form-edit-category':
        $categoryController->formEditCategory();
        break;
    case 'editCategory':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $categoryController->editCategory($id);
        break;

    case 'deleteCategory':
        $id = $_GET['id'];
        $categoryController->deleteCategory($id);
        break;

    case 'listParentCategories':
        $parentCategoryController->displayParentCategories();
        break;
    case 'addParentCategory':
        $parentCategoryController->addParentCategory();
        break;
    case 'form-edit-parent-category':
        $categoryController->formEditParentCategory();
        break;
    case 'editParentCategory':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $parentCategoryController->editParentCategory($id);
        break;
    case 'deleteParentCategory':
        $id = $_GET['id'];
        $parentCategoryController->deleteParentCategory($id);
        break;

    case 'listUserAdmins':
        $userAdminController->listUserAdmins();
        break;
    case 'insertUserAdmin':
        $userAdminController->insertUserAdmin();
        break;
    case 'editUserAdmin':
        $id = $_GET['id'];
        $userAdminController->editUserAdmin($id);
        break;
    case 'deleteUserAdmin':
        $id = $_GET['id'];
        $userAdminController->deleteUserAdmin($id);
        break;

    case 'listUsers':
        $userController->listUsers();
        break;
    case 'insertUser':
        $userController->insertUser();
        break;
    case 'editUser':
        $id = $_GET['id'];
        $userController->editUser($id);
        break;
    case 'deleteUser':
        $id = $_GET['id'];
        $userController->deleteUser($id);
        break;

    case 'listSlides':
        $slideController->listSlides();
        break;
    case 'showInsertForm':
        $slideController->showInsertForm();
        break;
    case 'insertSlide':
        $slideController->insertSlide();
        break;
    case 'showEditForm':
        $id = $_GET['id'];
        $slideController->showEditForm($id);
        break;
    case 'updateSlide':
        $slideController->updateSlide();
        break;
    case 'deleteSlide':
        $id = $_GET['id'];
        $slideController->deleteSlide($id);
        break;
    case 'listProductsComment':
        $commentController->listProductsComment();
        // $productController->listProducts();
        break;
    case 'listComments':
        $productId = isset($_GET['product_id']) ? $_GET['product_id'] : 0;
        $commentController->listComments($productId);
        break;

    case 'addComment':
        $commentController->addComment();
        break;

    case 'editComment':
        $commentId = isset($_GET['id']) ? $_GET['id'] : 0;
        $commentController->editComment($commentId);
        break;

    case 'deleteComment':
        $commentId = isset($_GET['id']) ? $_GET['id'] : 0;
        $commentController->deleteComment($commentId);
        break;
    case 'header':
        $productController->header();
        break;
    // case 'checkLogin':
    //     $accController->checkAcc($user, $pass);
    //     break;
    case 'dashboard':
        $dashboardController->showDashboard();
        break;
}


?>