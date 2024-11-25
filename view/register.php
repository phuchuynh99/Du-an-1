<div class="container my-5">
    <div class="form">
        <h2 class="text-center title">Đăng ký tài khoản</h2>
        <p class="text-center p-login">Nhập thông tin của bạn</p>

        <!-- <div class="box-lg d-flex justify-content-center my-3">
            <button class="btn btn-google-login">
                <img src="images/gg-logo.png" alt="Google logo" /> Đăng nhập với
                Google
            </button>
        </div>

        <div class="text-center or">Hoặc</div> -->

        <form action="index.php?page=addusers" method="POST" id="form-login" class="mt-4 mx-auto" style="max-width: 400px">
            <div class="mb-3 form-group">
                <input type="text" class="form-control" name="username" placeholder="Tên tài khoản" required>
            </div>
            <div class="mb-3 form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3 form-group">
                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" />
            </div>
            <div class="mb-3 form-group">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="btn-lg">
                <button type="submit" name="btnadd" class="btn w-100 login-btn">Đăng ký</button>
            </div>
            <div class="text-center mt-3">
                <a href="#" class="forget">Quên mật khẩu? Khôi phục mật khẩu</a>
            </div>
        </form>
    </div>
</div>