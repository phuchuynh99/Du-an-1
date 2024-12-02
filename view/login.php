<div class="container my-5">
    <div class="bg-light p-4 rounded shadow" style="max-width: 400px; margin: 0 auto;">
        <h2 class="text-center fw-bold mb-3">Đăng Nhập Tài Khoản</h2>
        <p class="text-center text-secondary">Nhập email và mật khẩu của bạn</p>

        <div class="d-flex justify-content-center my-3">
            <a href="#" class="btn d-flex align-items-center page-gg-login-btn">
                <img src="images/gg-logo.png" alt="Google logo" style="width: 24px; height: 24px; margin-right: 8px;">
                Đăng nhập với Google
            </a>
        </div>

        <div class="text-center text-secondary mb-3">Hoặc</div>

        <form action="" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <div class="invalid-feedback">
                    Vui lòng nhập tên đăng nhập.
                </div>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                <div class="invalid-feedback">
                    Vui lòng nhập mật khẩu.
                </div>
            </div>
            <div>
                <button type="submit" name="btnlogin" class="btn w-100 login-btn-page">Đăng nhập</button>
            </div>
            <div class="text-center mt-3">
                <a href="index.php?page=register" class="text-decoration-none">Bạn chưa đăng ký</a> <br>
                <a href="index.php?page=forgot_password_form" class="text-decoration-none">Quên mật khẩu? Khôi phục mật khẩu</a>
            </div>
        </form>
    </div>
</div>