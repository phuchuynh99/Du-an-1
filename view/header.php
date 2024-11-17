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
                <a href="index.php?page=login">
                    <i class="fas fa-user head-icon"></i>
                </a>
            </div>
        </div>
    </header>