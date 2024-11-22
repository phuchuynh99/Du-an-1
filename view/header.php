<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-secondary py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="index.php" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="public/img/banner/logo.png" alt="Nailuxe Logo" class="me-2" style="height: 50px;" />
                </a>

                <!-- Navigation -->
                <nav class="d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-white">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=products" class="nav-link text-white">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=about" class="nav-link text-white">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=contact" class="nav-link text-white">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=blog" class="nav-link text-white">Blog</a>
                        </li>
                    </ul>
                </nav>

                <!-- Icons -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Cart -->
                    <a href="index.php?page=cart" class="text-white">
                        <i class="fas fa-shopping-cart fs-4"></i>
                    </a>

                    <!-- User Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="text-white dropdown-toggle" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle-o fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                            <?php
                            if (isset($_SESSION['userinfo']) && !empty($_SESSION['userinfo'])) {
                                echo '<li><a class="dropdown-item" href="index.php?page=userUpdateForm">Edit Account</a></li>';
                                echo '<li><a class="dropdown-item" href="index.php?page=logout">Đăng xuất</a></li>';
                            } else {
                                echo '<li><a class="dropdown-item" href="index.php?page=login">Đăng nhập</a></li>';
                                echo '<li><a class="dropdown-item" href="index.php?page=register">Đăng ký</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="d-lg-none mt-3">
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-white">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=products" class="nav-link text-white">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=about" class="nav-link text-white">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=contact" class="nav-link text-white">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=blog" class="nav-link text-white">Blog</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>