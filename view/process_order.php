<div class="container order-process-wrapper">
    <!-- Order Step Navigation -->
    <div class="d-flex align-items-center justify-content-between my-4">
        <div class="d-flex align-items-center">
            <div
                class="rounded-circle border border-secondary d-flex align-items-center justify-content-center"
                style="width: 50px; height: 50px">
                1
            </div>
            <span class="ms-2 fw-bold">Giỏ hàng</span>
            <div class="bg-secondary mx-2" style="width: 60px; height: 2px"></div>
        </div>
        <div class="d-flex align-items-center">
            <div
                class="rounded-circle border border-secondary d-flex align-items-center justify-content-center bg-secondary text-white"
                style="width: 50px; height: 50px">
                2
            </div>
            <span class="ms-2">Tiến hành thanh toán</span>
            <div class="bg-secondary mx-2" style="width: 60px; height: 2px"></div>
        </div>
        <div class="d-flex align-items-center">
            <div
                class="rounded-circle border border-secondary d-flex align-items-center justify-content-center"
                style="width: 50px; height: 50px">
                3
            </div>
            <span class="ms-2">Hoàn thành</span>
        </div>
    </div>

    <!-- Order Information Form -->
    <div class="row">
        <div class="col-md-8">
            <h5>Thông tin đặt hàng</h5>
            <form>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="fullName" />
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" />
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" />
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Lưu ý đơn hàng</label>
                    <textarea class="form-control" id="note"></textarea>
                </div>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-4 process-order">
            <h5>Tóm tắt đơn hàng</h5>
            <div class="order-summary">
                <div class="d-flex justify-content-between">
                    <span>Sản phẩm</span>
                    <span>Sơn móng x1</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Tạm tính</span>
                    <span class="text-danger">450,000đ</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Tổng cộng</span>
                    <span class="text-danger">450,000đ</span>
                </div>
                <div class="mb-3">
                    <label for="discountCode" class="form-label">Nhập mã giảm giá</label>
                    <input
                        type="text"
                        class="form-control"
                        id="discountCode"
                        placeholder="VD: HNTT0609" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Chọn phương thức thanh toán</label>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="paymentMethod"
                            id="momoPayment"
                            checked />
                        <label class="form-check-label" for="momoPayment">
                            Chuyển khoản Momo
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="paymentMethod"
                            id="codPayment" />
                        <label class="form-check-label" for="codPayment">
                            Thanh toán khi nhận hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="paymentMethod"
                            id="bankPayment" />
                        <label class="form-check-label" for="bankPayment">
                            Thanh toán chuyển khoản
                        </label>
                    </div>
                </div>

                <button class="btn btn-payment w-100">Thanh toán</button>
            </div>
        </div>
    </div>
</div>