<div class="container">
      <div class="d-flex align-items-center justify-content-between my-4">
        <div class="d-flex align-items-center">
          <div
            class="rounded-circle border border-secondary d-flex align-items-center justify-content-center bg-secondary text-white"
            style="width: 50px; height: 50px"
          >
            1
          </div>
          <span class="ms-2 fw-bold">Giỏ hàng</span>
          <div class="bg-secondary mx-2" style="width: 60px; height: 2px"></div>
        </div>
        <div class="d-flex align-items-center">
          <div
            class="rounded-circle border border-secondary d-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px"
          >
            2
          </div>
          <span class="ms-2">Tiến hành thanh toán</span>
          <div class="bg-secondary mx-2" style="width: 60px; height: 2px"></div>
        </div>
        <div class="d-flex align-items-center">
          <div
            class="rounded-circle border border-secondary d-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px"
          >
            3
          </div>
          <span class="ms-2">Hoàn thành</span>
        </div>
      </div>

      <div class="row mt-4 py-3">
        <div class="col-md-8">
          <div class="border-bottom pb-2">
            <div class="row fw-bold text-center">
              <div class="col">Sản phẩm</div>
              <div class="col">Giá</div>
              <div class="col">Số lượng</div>
              <div class="col">Tổng</div>
              <div class="col">Thao tác</div>
            </div>
          </div>
          <div class="py-2">
            <div class="row align-items-center text-center">
              <div class="col d-flex align-items-center">
                <img
                  src="images/OIP.jpg"
                  alt="Product Image"
                  class="img-fluid me-3"
                  style="width: 80px; height: 80px"
                />
                <span>Sơ Mi Đơn Giản Thanh Lịch</span>
              </div>
              <div class="col text-danger">450,000đ</div>
              <div class="col d-flex justify-content-center align-items-center">
                <button class="btn btn-outline-secondary">-</button>
                <input
                  type="text"
                  class="form-control mx-2 text-center"
                  style="width: 50px"
                  value="1"
                />
                <button class="btn btn-outline-secondary">+</button>
              </div>
              <div class="col text-danger">450,000đ</div>
              <div class="col">
                <button class="btn btn-outline-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="d-flex gap-3 mt-3">
            <button class="btn btn-outline-secondary cart-continue-btn">
              ← Tiếp tục xem sản phẩm
            </button>
            <button class="btn btn-secondary text-white cart-update-btn">
              Cập nhật giỏ hàng
            </button>
          </div>
        </div>

        <div class="col-md-4">
          <div class="border p-3">
            <h3 class="mb-3">ĐƠN HÀNG CỦA BẠN</h3>
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span>Sản phẩm</span>
              <span>Áo Local Brands x1</span>
            </div>
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span>Tạm tính</span>
              <span>450,000đ</span>
            </div>
            <div class="d-flex justify-content-between py-2">
              <span class="fw-bold text-danger">Tổng cộng</span>
              <span class="fw-bold text-danger">450,000đ</span>
            </div>
            <button class="btn btn-secondary w-100 mt-3 cart-payment-btn">
              Tiến hành thanh toán
            </button>
          </div>
        </div>
      </div>
    </div>