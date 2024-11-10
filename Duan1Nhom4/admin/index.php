<<<<<<< HEAD
=======
<?php
session_start();
require_once '../commons/function.php';
require_once 'controllers/DashboardController.php';
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
require_once 'controllers/ParentCategoryController.php';

$act = isset($_GET['act']) ? $_GET['act'] : 'dashboard';
$user = $_POST['user'] ?? null;
$pass = $_POST['pass'] ?? null;
$Id_cat = isset($_GET['Id_cat']) ? $_GET['Id_cat'] : null;
$database = new PDO('mysql:host=localhost;dbname=duanmau1', 'root', '');
$productController = new ProductController();

$categoryController = new CategoryController();
$parentCategoryController = new CategoryController();
$userAdminController = new UserAdminController();
$userController = new UserController();
$accController = new accController();
$DashboardController = new DashboardController();
$slideModel = new SlideModel();
$slideController = new SlideController();

switch ($act) {
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

    case 'logout':
        $accController->logout();
        break;
    case 'login':
        $accController->login();
        break;
    case 'home':
        $DashboardController->showDashboard();
        break;
    case 'header':
        $productController->header();
        break;
    case 'checkLogin':
        $accController->checkLogin($user, $pass);
        break;
    default:
        $DashboardController->showDashboard();
        break;
}
?>
>>>>>>> main
