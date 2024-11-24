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
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="public/css/main.css" />
    <!-- Thêm font-awesome -->
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <!-- Logo -->
            <a class="logo navbar-brand" href="#">
              <img src="assets/images/1.png" alt="" />
            </a>
            <!-- Toggle menu cho mobile -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu chính -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.html">Sản phẩm</a>
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
                  <a class="nav-link" href="cart.html">Giỏ hàng</a>
                </li>
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
                    <!-- <li>
                      
                            if (isset($_SESSION['userinfo']) && !empty($_SESSION['userinfo'])) {
                            echo '<a href="#">' . $_SESSION['userinfo']['username'] . '<i class="fa fa-angle-down"></i></a>
                                  <ul class="ht-dropdown">
                                    <li><a href="index.php?page=userUpdateForm">Chỉnh sửa tài khoản</a></li>
                                    <li><a href="index.php?page=logout">Đăng xuất</a></li>
                                  </ul>';
                            } else {
                            echo '<a href="#">Login<i class="fa fa-angle-down"></i></a>
                                  <ul class="ht-dropdown">
                                    <li><a href="index.php?page=login">Đăng nhập</a></li>
                                    <li><a href="index.php?page=register">Đăng ký</a></li>
                                  </ul>';
                            } 
                    </li> -->
                    <!-- Auth menu -->
                    <li>
                      <a href="#" class="d-none d-md-block"
                        >Login<i class="fa fa-angle-down"></i
                      ></a>
                      <ul class="ht-dropdown">
                        <li><a href="login.html">Đăng nhập</a></li>
                        <li><a href="login.html">Đăng ký</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/about1.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="assets/images/about.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="assets/images/about3.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container py-3 nav-category-home">
      <ul class="nav justify-content-center border-bottom">
        <li class="nav-item">
          <a class="category-home-list nav-link active" href="#">Sơn móng</a>
        </li>
        <li class="nav-item">
          <a class="category-home-list nav-link" href="#">Dụng cụ làm móng</a>
        </li>
        <li class="nav-item">
          <a class="category-home-list nav-link" href="#">Thiết bị làm móng</a>
        </li>
        <li class="nav-item">
          <a class="category-home-list nav-link" href="#">Sản phẩm trang trí móng</a>
        </li>
        <li class="nav-item">
          <a class="category-home-list nav-link" href="#">Móng giả</a>
        </li>
      </ul>
    </div>