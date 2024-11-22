<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellphoneS</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/home_fe.css">
    <script src="./assets/js/script.js"></script>

    <link rel="icon" href="../image/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .p {
    margin-top: 0;
    margin-bottom: 1rem;
}
</style>

<body>
    <header>
        <div class="box-header-top">
            <div class="header-top-swiper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 py-1 img-fluid">
                             <img src="./assets/image/top-banner-chinh-sach-bao-hanh-doi-tra.webp" alt="">
                        </div>
                        <div class="col-md-4 py-1 img-fluid">
                            <img src="./assets/image/top-banner-chinh-hang-xuat-vat-day-du.webp" alt="">
                        </div>
                        <div class="col-md-4 py-1 img-fluid">
                            <img src="./assets/image/top-banner-giao-nhanh-mien-phi.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="cps-container-navbar">

            <div class="container">
                <div class="cps-container-navbar-sticky">


                    <div>
                        <a href="index.php">
                            <div class="box-logo">
                                <img src="assets/image/logo.png" alt="">
                            </div>
                        </a>
                    </div>


                    <!-- <a href="#" class="header-item-button-menu">
                            <div class="about_box-icon">

                            </div>
                            <div class="about_box-content">
                                <p>Danh Mục</p>
                            </div>

                        </a> -->
                    <div class="dropdown-region" role="menu" class="dropdown">
                        <div class="dropdown-trigger">
                            <div class="box_local-store">
                                <img class="img-local" src="assets/image/local.png" alt="">
                                <nav>
                                    <p class="local-content-box-top">
                                        Xem giá tại
                                    </p>
                                    <p class="local-content-box-bot">
                                        Hà Nội
                                    </p>
                                </nav>

                            </div>
                        </div>
                    </div>

                    <div class="box-search">
                        <form action="?act=search" method="POST">
                            <div class="input-group-button">
                                <input class="input" type="text" name="query" placeholder="Bạn cần tìm gì?....."
                                    required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <a href="tel:18002044" class="contact-hotline">
                        <div class="about-box-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="about-box-content">
                            <p>Mua hàng</p>
                            <p>18002097</p>
                        </div>
                    </a>

                    <a href="assets/contact.html" class="header-box-about-store">
                        <div class="about-box-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="header-box-about-content">
                            <p>Liên hệ</p>
                            <p>với chúng tôi</p>
                        </div>
                    </a>

                    <a href="assets/Gio_hang.html" class="header-box-search-item-product">
                        <div class="about-box-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="header-box-about-content">
                            <p>Tra cứu</p>
                            <p>Đơn hàng</p>
                        </div>
                    </a>

                    <a href="?act=viewCart" class="header-box-cart">
                        <div class="about-box-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="header-box-about-content">
                            Giỏ hàng
                        </div>
                    </a>

                    <div class="box-login">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <div class="box-user">
                            <!-- <div class="about-icon">
                                <i class="fa-regular fa-circle-user"></i>
                            </div> -->
                            <div class="about-contact">
                                <i class="fa-regular fa-circle-user"></i>
                                <p style="color: white;">Xin chào,
                                    <?php echo isset($_SESSION['user']['username']) ? htmlspecialchars($_SESSION['user']['username']) : 'Khách' ?>
                                </p>
                                <a href="?act=logout-client">
                                    <div class="about-icon">
                                        <i class="fa-solid fa-sign-out-alt"></i>
                                    </div>

                                </a>
                            </div>

                        </div>

                        <?php } else { ?>
                        <a href="?act=login-client">
                            <div class="about-icon">
                                <i class="fa-regular fa-circle-user"></i>
                            </div>
                            <div class="about-contact">
                                <p style="color: white;">Đăng nhập</p>
                            </div>
                        </a>
                        <?php } ?>
                    </div>


                </div>
            </div>



        </div>
    </header>

</body>




</html>