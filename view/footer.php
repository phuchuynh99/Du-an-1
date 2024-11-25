<div class="footer__logo">
  <img src="public/img/banner/logo.png" alt="" />
</div>
<footer class="bg-light text-dark py-4">
  <div class="container">
    <div class="row py-3 text-center">
      <div class="col-md-4">
        <h5 class="mb-3">Thông tin liên hệ</h5>
        <p><i class="fas fa-phone"></i> 012345678</p>
        <p><i class="fas fa-envelope"></i> abcdef@gmail.com</p>
        <p>
          <i class="fas fa-map-marker-alt"></i> 123 quốc lộ 1A, Tân Thới
          Hiệp, Quận 12
        </p>
      </div>

      <div class="col-md-4">
        <h5 class="mb-3">Điều khoản sử dụng</h5>
        <ul class="list-unstyled">
          <p class="text-dark">Chính sách bảo mật</p>
          <p class="text-dark">Chính sách giao hàng</p>
          <p class="text-dark">Chính sách đền bù</p>
        </ul>
      </div>

      <div class="col-md-4">
        <h5 class="mb-3">Liên hệ với chúng tôi</h5>
        <p>
          Hãy là người đầu tiên biết về các chương trình giảm giá độc quyền
          và sản phẩm mới.
        </p>
        <form>
          <div class="input-group">
            <input
              type="email"
              class="form-control"
              placeholder="Email của bạn" />
            <button class="btn btn-dark" type="submit">Gửi</button>
          </div>
        </form>
      </div>
    </div>

    <div class="text-center mt-4">
      <!-- Social Media Icons -->
      <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
      <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-dark me-2"><i class="fab fa-pinterest"></i></a>
      <a href="#" class="text-dark me-2"><i class="fab fa-youtube"></i></a>
      <a href="#" class="text-dark"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>
</footer>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

<script>
  const categoryBtn = document.querySelectorAll(".category-home-list");
  const contents = document.querySelectorAll(".new-product-home");

  contents[0].style.display = "flex";

  categoryBtn.forEach((cate, index) => {
    cate.addEventListener("click", () => {
      categoryBtn.forEach((btn) => btn.classList.remove("active"));
      cate.classList.add("active");

      contents.forEach((content) => (content.style.display = "none"));

      if (contents[index]) {
        contents[index].style.display = "flex";
      }
    });
  });
</script>
</body>

</html>