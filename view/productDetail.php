<div class="container">
    <div class="product-container row">
        <!-- Cột trái: Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <img src="public/img/<?= $product['img'] ?>" alt="<?= $product['name'] ?>" class="img-fluid">
        </div>

        <!-- Cột phải: Thông tin sản phẩm -->
        <div class="col-md-6">
            <h1 class="product-title"><?= $product['name'] ?></h1>

            <div class="product-price">
                <span class="price-current"><?= number_format($product['price'], 0, ',', '.') ?>đ</span>
                <?php if ($product['discount_price'] > 0): ?>
                    <span class="price-old"><?= number_format($product['discount_price'], 0, ',', '.') ?>đ</span>
                <?php endif; ?>
            </div>

            <div class="product-rating">
                <span class="rating-stars">★★★★★</span>
                <span class="rating-score">5.0</span>
            </div>

            <!-- Màu sắc -->
            <h4>Màu sắc</h4>
            <div class="product-colors d-flex flex-wrap">
                <div class="color-sample">
                    <img src="public/img/dũa móng.webp" alt="Màu sắc 1" class="img-fluid">
                </div>
                <div class="color-sample">
                    <img src="public/img/mài 1.webp" alt="Màu sắc 2" class="img-fluid">
                </div>
                <div class="color-sample">
                    <img src="public/img/mài 3.webp" alt="Màu sắc 3" class="img-fluid">
                </div>
                <div class="color-sample">
                    <img src="public/img/mài 3.webp" alt="Màu sắc 3" class="img-fluid">
                </div>
                <div class="color-sample">
                    <img src="public/img/mài 3.webp" alt="Màu sắc 3" class="img-fluid">
                </div>
            </div>
            <!-- Số lượng -->
            <div class="product-quantity mt-3">
                <h4>Số lượng</h4>
                <div class="input-group mb-3" style="width: 100px;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button">-</button>
                    </div>
                    <input type="text" class="form-control text-center" value="1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">+</button>
                    </div>
                </div>
            </div>

            <!-- Nút Thêm vào giỏ hàng và Mua ngay -->
            <div class="d-flex">
                <button class="btn btn-secondary mr-2">Thêm vào giỏ hàng</button>
                <button class="btn btn-primary">Mua ngay</button>
            </div>
        </div>
    </div>

    <!-- Phần Mô tả và Đánh giá -->
    <div class="description-section mt-4">
        <div class="description-tabs d-flex">
            <div class="tab active">Mô tả</div>
            <div class="tab">Đánh giá</div>
        </div>
        <div class="description-content">
            <p><strong>Sản Phẩm:</strong> Bộ Sơn Gel Nail Màu Pastel</p>
            <p>Bộ sơn gel này là lựa chọn hoàn hảo cho những ai yêu thích sự nhẹ nhàng, thanh lịch nhưng vẫn muốn thể hiện phong cách riêng...</p>
            <ul>
                <li><strong>Bền màu:</strong> Độ bền vượt trội, chống xước.</li>
                <li><strong>An toàn:</strong> Không chứa hóa chất độc hại.</li>
            </ul>
        </div>
    </div>
    <!-- comment -->
    <section>
        <div class="comment-section">
            <div class="comment">
                <img src="user1.jpg" alt="User Avatar">
                <div class="comment-content">
                    <div class="username">Nhà khùng <span class="date">02/11/2024</span></div>
                    <div class="message">Sản phẩm rất tốt, dễ sử dụng và bền. Tôi rất hài lòng!</div>
                </div>
            </div>

            <div class="comment">
                <img src="admin.jpg" alt="Admin Avatar">
                <div class="comment-content">
                    <div class="username">Admin <span class="date">02/11/2024</span></div>
                    <div class="message">Shop cảm ơn chị Nhà khùng</div>
                </div>
            </div>

            <div class="comment">
                <img src="user2.jpg" alt="User Avatar">
                <div class="comment-content">
                    <div class="username">A phúc cute <span class="date">02/11/2024</span></div>
                    <div class="message">Này sơn móng tay mèo được không shop</div>
                </div>
            </div>

            <div class="comment">
                <img src="admin.jpg" alt="Admin Avatar">
                <div class="comment-content">
                    <div class="username">Admin <span class="date">02/11/2024</span></div>
                    <div class="message">Dạ anh Jack cũng sử dụng đó ạ</div>
                </div>
            </div>
    </section>

    <!-- Phần Sản phẩm tương tự -->
    <section class="my-4">
        <h4 class="sptt">Sản phẩm tương tự</h4>
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <div class="discount-tag">-30%</div>
                    <img src="public/img/mài 1.webp" alt="7 in 1 Clear Builder Gel" class="product-image">
                    <p class="product-title-similar">7 in 1 Clear Builder Gel 15ml</p>
                    <p><span class="product-price-old-similar">300.000đ</span><span class="product-price-similar">270.000đ</span></p>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <div class="discount-tag">-30%</div>
                    <img src="public/img/mài 1.webp" alt="7 in 1 Clear Builder Gel" class="product-image">
                    <p class="product-title-similar">7 in 1 Clear Builder Gel 15ml</p>
                    <p><span class="product-price-old-similar">300.000đ</span><span class="product-price-similar">270.000đ</span></p>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <div class="discount-tag">-30%</div>
                    <img src="public/img/mài 1.webp" alt="7 in 1 Clear Builder Gel" class="product-image">
                    <p class="product-title-similar">7 in 1 Clear Builder Gel 15ml</p>
                    <p><span class="product-price-old-similar">300.000đ</span><span class="product-price-similar">270.000đ</span></p>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <div class="discount-tag">-30%</div>
                    <img src="public/img/mài 1.webp" alt="7 in 1 Clear Builder Gel" class="product-image">
                    <p class="product-title-similar">7 in 1 Clear Builder Gel 15ml</p>
                    <p><span class="product-price-old-similar">300.000đ</span><span class="product-price-similar">270.000đ</span></p>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>
        </div>
    </section>
</div>