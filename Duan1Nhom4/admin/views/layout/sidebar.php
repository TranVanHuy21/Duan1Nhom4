<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="./assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="./assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">DungNhay</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listCategories' ?>"
                        class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản Lý Danh Mục
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listProduct' ?>" class="nav-link">
                        <i class="nav-icon fas fa-mobile"></i>
                        <p>
                            Quản Lý Sản Phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listParentCategories' ?>"
                        class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>
                            Quản trị Parent
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listSlides' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Quản trị Slide
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listUsers' ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Quản trị người dùng
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= 'http://localhost/Duan1Nhom4/Duan1Nhom4/admin/?act=listUserAdmins' ?>"
                        class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Quản trị admin
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>