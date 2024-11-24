<div class="product-detail container mt-4">
    <div class="row g-0 flex-column flex-lg-row">
        <!-- Cột ảnh -->
        <div class="col-12 col-lg-5 text-center">
            <div class="row">
                <div class="col-2 d-none d-lg-flex flex-column align-items-center">
                    <!-- Ảnh nhỏ -->
                    <img
                        src="assets/images/image.png"
                        width="64px"
                        class="img-thumbnail mb-2"
                        alt="Sub Image 1" />
                    <img
                        src="assets/images/image.png"
                        width="64px"
                        class="img-thumbnail mb-2"
                        alt="Sub Image 2" />
                    <img
                        src="assets/images/image.png"
                        width="64px"
                        class="img-thumbnail mb-2"
                        alt="Sub Image 3" />
                    <img
                        src="assets/images/image.png"
                        width="64px"
                        class="img-thumbnail mb-2"
                        alt="Sub Image 4" />
                </div>
                <div class="col-10">
                    <!-- Ảnh chính -->
                    <img
                        src="assets/images/image.png"
                        class="img-fluid mx-auto d-block"
                        alt="Main Product Image" />
                </div>
            </div>
        </div>

        <!-- Cột thông tin sản phẩm -->
        <div class="col-12 col-lg-7 ps-lg-4 mt-4 mt-lg-0">
            <h1 class="product-title">Sơn móng tay dạng gel Fleurwee</h1>
            <p class="product-price text-danger">
                250.000đ
                <span class="text-muted text-decoration-line-through">300.000đ</span>
            </p>
            <div class="product-rating">
                <span class="text-warning">★★★★★</span>
                <span>5.0</span>
            </div>
            <div class="product-variants">
                <h6>Màu sắc</h6>
                <div class="row">
                    <div class="col-2">
                        <img
                            src="path/to/color1.jpg"
                            class="img-thumbnail"
                            alt="Color 1" />
                    </div>
                    <div class="col-2">
                        <img
                            src="path/to/color2.jpg"
                            class="img-thumbnail"
                            alt="Color 2" />
                    </div>
                </div>
            </div>
            <div class="product-quantity mt-3 col-2">
                <h6>Số lượng</h6>
                <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button">-</button>
                    <input
                        type="number"
                        class="form-control text-center"
                        value="1"
                        min="1" />
                    <button class="btn btn-outline-secondary" type="button">+</button>
                </div>
            </div>
            <div class="product-actions mt-4">
                <button class="btn btn-primary me-2 btn-add-cart-detail">
                    Thêm vào giỏ hàng
                </button>
                <button class="btn btn-success btn-buy-now-detail">Mua ngay</button>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <!-- Tab Navigation -->
    <ul class="nav nav-tabs" id="productTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button
                class="nav-link active"
                id="description-tab"
                data-bs-toggle="tab"
                data-bs-target="#description"
                type="button"
                role="tab"
                aria-controls="description"
                aria-selected="true">
                Mô tả
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="reviews-tab"
                data-bs-toggle="tab"
                data-bs-target="#reviews"
                type="button"
                role="tab"
                aria-controls="reviews"
                aria-selected="false">
                Đánh giá
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content mt-3" id="productTabContent">
        <!-- Mô tả -->
        <div
            class="tab-pane fade show active"
            id="description"
            role="tabpanel"
            aria-labelledby="description-tab">
            <h4>Sản Phẩm: Bộ Sơn Gel Nail Màu Pastel</h4>
            <p>
                Bộ Sơn Gel Nail Màu Pastel là lựa chọn hoàn hảo cho những ai yêu
                thích sự nhẹ nhàng, thanh lịch nhưng vẫn muốn thể hiện phong cách
                riêng...
            </p>
        </div>

        <!-- Đánh giá -->
        <div
            class="tab-pane fade"
            id="reviews"
            role="tabpanel"
            aria-labelledby="reviews-tab">
            <h4>Đánh giá sản phẩm</h4>
            <p>
                Chưa có đánh giá nào. Hãy là người đầu tiên đánh giá sản phẩm này!
            </p>
        </div>
    </div>
</div>

<!-- Sản phẩm liên quan  -->
<div class="container custom-products my-4">
    <h2 class="mb-4">Sản phẩm tương tự</h2>
    <p class="">
        Ưu đãi tháng này – Đẹp lung linh chỉ với giá ưu đãi!
    </p>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 g-4">
        <!-- Product 1 -->
        <div class="col">
            <div class="card h-100 text-center">
                <img
                    src="assets/images/image.png"
                    class="card-img-top"
                    alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title">PC650E</h5>
                    <p class="card-text">Máy mài móng tay SM180F</p>
                    <p>
                        <span class="text-decoration-line-through text-muted">300,000đ</span>
                        <span class="text-danger fw-bold">270,000đ</span>
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-secondary w-100">Mua ngay</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img
                    src="assets/images/image.png"
                    class="card-img-top"
                    alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title">PC650E</h5>
                    <p class="card-text">Máy mài móng tay SM180F</p>
                    <p>
                        <span class="text-decoration-line-through text-muted">300,000đ</span>
                        <span class="text-danger fw-bold">270,000đ</span>
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-secondary w-100">Mua ngay</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img
                    src="assets/images/image.png"
                    class="card-img-top"
                    alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title">PC650E</h5>
                    <p class="card-text">Máy mài móng tay SM180F</p>
                    <p>
                        <span class="text-decoration-line-through text-muted">300,000đ</span>
                        <span class="text-danger fw-bold">270,000đ</span>
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-secondary w-100">Mua ngay</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img
                    src="assets/images/image.png"
                    class="card-img-top"
                    alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title">PC650E</h5>
                    <p class="card-text">Máy mài móng tay SM180F</p>
                    <p>
                        <span class="text-decoration-line-through text-muted">300,000đ</span>
                        <span class="text-danger fw-bold">270,000đ</span>
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-secondary w-100">Mua ngay</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-center">
                <img
                    src="assets/images/image.png"
                    class="card-img-top"
                    alt="Product 1" />
                <div class="card-body">
                    <h5 class="card-title">PC650E</h5>
                    <p class="card-text">Máy mài móng tay SM180F</p>
                    <p>
                        <span class="text-decoration-line-through text-muted">300,000đ</span>
                        <span class="text-danger fw-bold">270,000đ</span>
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-secondary w-100">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>