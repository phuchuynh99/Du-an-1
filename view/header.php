<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="public/css/main.css">
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.19.1/firebase-auth.js"></script>


</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <!-- Logo -->
          <a class="logo navbar-brand" href="#">
            <img src="./public/img/banner/logo.png" alt="" />
          </a>
          <!-- Toggle menu cho mobile -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menu chính -->
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=products">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item d-block d-md-none d-lg-none">
                <a class="nav-link" href="index.php?page=cart">Giỏ hàng</a>
              </li>
              <hr class="my-2 d-block d-md-none d-lg-none text-white">

              <li class="nav-item d-block d-md-none d-lg-none">
                <a class="nav-link" href="login.html">Đăng nhập</a>
              </li>
              <li class="nav-item d-block d-md-none d-lg-none">
                <a class="nav-link" href="login.html">Đăng ký</a>
              </li>

            </ul>
            <div class="d-flex align-items-center head-icon">
              <a href="cart.html" class="nav-link">
                <i class="fas fa-shopping-cart d-none d-md-block"></i>
              </a>

              <div class="ht-right">
                <ul class="ht-us-menu d-flex">
                  <!-- User menu -->
                  <li>
                    <?php
                    if (isset($_SESSION['userinfo']) && !empty($_SESSION['userinfo'])) {
                      echo '<a href="#" class="d-none d-md-block">' . $_SESSION['userinfo']['username'] . '<i class="fa fa-angle-down"></i></a>
                                  <ul class="ht-dropdown">
                                    <li><a href="index.php?page=userUpdateForm">Chỉnh sửa tài khoản</a></li>
                                    <li><a href="index.php?page=logout">Đăng xuất</a></li>
                                  </ul>';
                    } else {
                      echo '<a href="#" class="d-none d-md-block">Login<i class="fa fa-angle-down"></i></a>
                                  <ul class="ht-dropdown">
                                    <li><a href="index.php?page=login">Đăng nhập</a></li>
                                    <li><a href="index.php?page=register">Đăng ký</a></li>
                                  </ul>';
                    } ?>
                  </li>
                  <!-- Auth menu -->
                  <!-- <li>
                      <a href="#" class="d-none d-md-block"
                        >Login<i class="fa fa-angle-down"></i
                      ></a>
                      <ul class="ht-dropdown">
                        <li><a href="index.php?page=login">Đăng nhập</a></li>
                        <li><a href="index.php?page=register">Đăng ký</a></li>
                      </ul>
                    </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>