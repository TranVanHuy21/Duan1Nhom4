<?php

ob_start();
class ClientController
{
    private $clientModel;

    public function __construct()
    {
        $pdo = connectDB();
        $this->clientModel = new ClientModel($pdo);
    }


    public function search()
    {
        if (isset($_REQUEST['query'])) {
            $query = htmlspecialchars($_REQUEST['query']);
            $itemsPerPage = 9;
            $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
            $offset = ($currentPage - 1) * $itemsPerPage;
            $products = $this->clientModel->search($query, $itemsPerPage, $offset);
            $totalProducts = $this->clientModel->getTotalProductsBySearch($query);

            $totalPages = ceil($totalProducts / $itemsPerPage);
            $parentCategories = $this->clientModel->getAllParentCategories();
            $categories = [];
            foreach ($parentCategories as $parentCategory) {
                $categories[$parentCategory['id']] = $this->clientModel->getCategoriesByParentIdClient($parentCategory['id']);
            }
            $slides7 = $this->clientModel->getAllSlidesId_7();
            $slides8 = $this->clientModel->getAllSlidesId_8();
            $slides9 = $this->clientModel->getAllSlidesId_9();
            $slides10 = $this->clientModel->getAllSlidesId_10();
            include './views/searchProduct.php';
        } else {
            $products = [];
            include './views/searchProduct.php';
        }
    }

    public function showHome()
    {
        $getEndTime = $this->clientModel->getEndTime();

        $productsMaxDiscount = $this->clientModel->getProductWithMaxDiscount();
        $categories = $this->clientModel->getAllCategoryClient();
        $parentCategories = $this->clientModel->getAllParentCategories(); // Lấy tất cả danh mục cha
        $categories = [];
        foreach ($parentCategories as $parentCategory) {
            $categories[$parentCategory['id']] = $this->clientModel->getCategoriesByParentIdClient($parentCategory['id']);
        }

        // Lấy danh sách sản phẩm có lượt xem nhiều nhất
        $topProducts = $this->clientModel->getTopProducts();
        $slides1 = $this->clientModel->getAllSlidesId_1();
        $slides2 = $this->clientModel->getAllSlidesId_2();
        $slides3 = $this->clientModel->getAllSlidesId_3();
        $slides4 = $this->clientModel->getAllSlidesId_4();
        $slides5 = $this->clientModel->getAllSlidesId_5();
        $slides6 = $this->clientModel->getAllSlidesId_6();
        $slides7 = $this->clientModel->getAllSlidesId_7();
        $slides8 = $this->clientModel->getAllSlidesId_8();
        $slides9 = $this->clientModel->getAllSlidesId_9();
        $slides10 = $this->clientModel->getAllSlidesId_10();


        $products1 = $this->clientModel->getProductsByParent_3();
        $products2 = $this->clientModel->getProductsByParent_4();
        $products3 = $this->clientModel->getProductsByParent_5();
        $products4 = $this->clientModel->getProductsByParent_6();
        $products5 = $this->clientModel->getProductsByParent_7();
        $products6 = $this->clientModel->getProductsByParent_8();
        include './views/home-fe.php'; // Hiển thị trang chủ
    }
    public function getMaxDiscountProduct()
    {
        $productsMaxDiscount = $this->clientModel->getProductWithMaxDiscount();
    }
    public function showHomeParent($ids = [])
    {
        $parentCategories = [];
        foreach ($ids as $id) {
            $parentCategories[] = $this->clientModel->getParentCategoryById($id);
        }
    }

    public function showProductsByCategory($categoryId)
    {
        $products = $this->clientModel->getProductsByCategoryId($categoryId);
        include './views/products_category.php';
    }

   

    public function listCategories()
    {
        $category_client = $this->clientModel->getAllCategoryClient();
    }


    public function topViewProduct($id)
    {
        // Tăng số lượt click
        $this->clientModel->incrementClick($id);

        // Lấy danh sách sản phẩm có lượt xem nhiều nhất
        $topProducts = $this->clientModel->getTopProducts();

        // // Gọi view và truyền dữ liệu
        // include 'views/home-fe.php';
    }

    public function submitComment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productID = $_POST['product_id'];
            $userId = $_SESSION['user']['User_id'];
            $commentContent = $_POST['comment_content'];
    
            $success = $this->clientModel->addComment($productID, $userId, $commentContent);
    
            if ($success) {
                $_SESSION['flash_message'] = "Bình luận đã được gửi thành công!";
            } else {
                $_SESSION['flash_message'] = "Có lỗi xảy ra khi gửi bình luận. Vui lòng thử lại.";
            }
    
            // Chuyển hướng về trang chi tiết sản phẩm
            header("Location:index.php?act=showProductDetail&id=".urlencode($productID));

            exit();
        } else {
            // Nếu không phải POST request, chuyển hướng về trang chủ
            header("Location: index.php");
            exit();
        }
    }
    public function showProductDetail($id)
{
    $product = $this->clientModel->getProductById($id);
    if ($product) {
        $categoryId = $product['Id_cat'];
        $relatedProducts = $this->clientModel->getTopViewedProductsByCategory($product['Id_cat']);
        // Lấy danh sách bình luận
        $comments = $this->clientModel->getCommentsByProductId($id);
        // Truyền biến $comments vào view
        include './views/productDetailView.php';
    } else {
        include 'views/404.php';
    }
}

    public function login_client()
    {
        include_once './views/login-fe.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-login-client'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->clientModel->checkAccClient($username, $password);
            // var_dump($user);
            // die;
            if ($user) {
                if ($password == $user['password']) {
                    $_SESSION['user'] = $user;
                    echo '<script type="text/javascript">
                         window.location.href = "index.php?act=home";
                        </script>';
                    exit();
                }
            } else {
                echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu!");</script>';
                header("location:?act=login-client");
                exit();
            }
        }
    }

    public function register_client()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];

            if ($this->clientModel->register_client($username, $password, $name)) {
                // header('Location: index.php?action=login-client');
                include 'views/login-fe.php';
                exit();
            } else {
                $error = "Đăng ký không thành công.";
                include 'views/register-fe.php';
            }
        } else {
            include 'views/register-fe.php';
        }
    }

    public function logout_client()
    {
        unset($_SESSION['user']);
        echo '<script type="text/javascript">
        window.location.href = "index.php?act=home";
      </script>';
        exit();
    }

    public function forgotPassword()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $newPassword = $_POST['new_password'];

            if ($this->clientModel->resetPassword($username, $newPassword)) {
                $message = "Mật khẩu đã được đặt lại thành công.";
                include 'views/login-fe.php';
            } else {
                $error = "Không thể đặt lại mật khẩu.";
                include 'views/forgot-password.php';
            }
        } else {
            include 'views/forgot-password.php';
        }
    }
}
ob_end_flush();
?>