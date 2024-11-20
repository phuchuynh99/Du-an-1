<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/products.css">
    <link rel="stylesheet" href="public/css/product-detail.css">
    <link rel="stylesheet" href="public/css/font.css">
    <link rel="stylesheet" href="public/css/blog.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-auth.js"></script> 


</head>

<body>
    <header class="bg-secondary py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <img src="public/img/banner/logo.png" alt="Nailuxe Logo" class="me-2" />
            </div>

            <nav>
                <ul class="d-flex list-unstyled mb-0">
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

            <div class="icons d-flex gap-3">
                <a href="index.php?page=cart" class="text-white">
                    <i class="fas fa-shopping-cart head-icon"></i>
                </a>
                <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                    <ul class="ht-us-menu d-flex">
                        <li>
                            <?php
                            if (isset($_SESSION['userinfo']) && !empty($_SESSION['userinfo'])) {
                                // Hiển thị tên người dùng và các tùy chọn
                                echo '<a href="#"><i class="fa fa-user-circle-o"></i>' . $_SESSION['userinfo']['username'] . '</a>';
                                echo '<ul class="ht-dropdown right">';
                                echo '<li><a href="index.php?page=userUpdateForm">Edit Account</a></li>';
                                echo '<li><a href="index.php?page=logout">Đăng xuất</a></li>';
                                echo '</ul>';
                            } else {
                                // Hiển thị giao diện chưa đăng nhập
                                echo '<a href="#"><i class="fa fa-user-circle-o"></i>Login</a>';
                                echo '<ul class="ht-dropdown right">';
                                echo '<li><a href="index.php?page=login">Đăng nhập</a></li>';
                                echo '<li><a href="index.php?page=register">Đăng ký</a></li>';
                                echo '</ul>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>