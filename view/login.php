<div class="container my-5">
    <div class="form">
        <h2 class="text-center title">Đăng Nhập Tài Khoản</h2>
        <p class="text-center p-login">Nhập email và mật khẩu của bạn</p>

        <div class="box-lg d-flex justify-content-center my-3">
            <button class="btn btn-google-login">
                <img src="images/gg-logo.png" alt="Google logo" /> Đăng nhập với
                Google
            </button>
        </div>

        <div class="text-center or">Hoặc</div>

        <form action="index.php?page=checkUserRole" method="POST" id="form-login" class="mt-4 mx-auto" style="max-width: 400px">
            <div class="mb-3 form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required />
            </div>
            <div class="mb-3 form-group">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required />
            </div>
            <div class="btn-lg">
                <button type="submit" name="btnlogin" class="btn w-100 login-btn">Đăng nhập</button>
            </div>
            <div class="text-center mt-3">
                <a href="index.php?page=register" class="forget">Bạn chưa đăng ký</a> <br>
                <a href="#" class="forget">Quên mật khẩu? Khôi phục mật khẩu</a>
            </div>
        </form>

    </div>
</div>