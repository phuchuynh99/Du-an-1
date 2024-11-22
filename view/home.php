<?php
// $cataloglist = '';
// foreach ($catalog_list as $category) {
//     $cataloglist .= '<li><a href="index.php?page=product&id_category=' . $category['id'] . '">' . htmlspecialchars($category['name']) . '</a></li>';
// }
?>


<div class="banner-index">
    <div class="carousel">
        <div class="carousel-track">
            <img src="./public/img/banner/banner1.1.png" alt="Banner 1" class="carousel-img">
            <img src="./public/img/banner/banner1.png" alt="Banner 2" class="carousel-img">
            <img src="./public/img/banner/banner2.png" alt="Banner 3" class="carousel-img">
        </div>
        <button class="carousel-btn prev">❮</button>
        <button class="carousel-btn next">❯</button>
    </div>
</div>
<!-- sản phẩm mới -->
<div class="container">
    <nav class="navbar-products">
        <ul>
            <?= $cataloglist ?>
            <!-- <li><a href="#">Sơn móng</a></li>
        <li><a href="#">Dụng cụ làm móng</a></li>
        <li><a href="#">Thiết bị làm móng</a></li>
        <li><a href="#">Trang trí móng</a></li>
        <li><a href="#">Móng giả</a></li> -->
        </ul>
    </nav>
    <section class="newproduct-section">
        <div class="title-products">
            <h2>Sản phẩm mới</h2>
            <p>Trải nghiệm các sản phẩm làm móng hoàn toàn mới.</p>
        </div>

        <div class="products">
            <div class="product1">
                <img class="img1"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Sơn móng">
                <button class="buy-now">Mua ngay</button>
            </div>
            <div class="product2">
                <img class="img2"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Nước dưỡng móng">
                <button class="buy-now">Mua ngay</button>
            </div>
        </div>
    </section>
    <!-- sản phẩm hot -->
    <section class="newproduct-section">
        <div class="title-products">
            <h2>Sản phẩm hot🔥</h2>
            <p>Nail đẹp - Giá hời, nhanh tay kẻo lỡ!</p>
        </div>

        <div class="products">
            <div class="product1">
                <img class="img1"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Sơn móng">
                <button class="buy-now">Mua ngay</button>
            </div>
            <div class="product2">
                <img class="img2"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Nước dưỡng móng">
                <button class="buy-now">Mua ngay</button>
            </div>
        </div>

        <div class="products">
            <div class="product2">
                <img class="img1"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Sơn móng">
                <button class="buy-now">Mua ngay</button>
            </div>
            <div class="product1">
                <img class="img2"
                    src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Nước dưỡng móng">
                <button class="buy-now">Mua ngay</button>
            </div>
        </div>
    </section>
    <!-- sản phẩm sale -->
    <section class="sale-products">
        <div class="title-products">
            <h2>Sản phẩm sale</h2>
            <p>Ưu đãi tháng này - Đẹp lung linh chỉ với giá ưu đãi!</p>
        </div>

        <div class="sale-items">
            <button class="slider-btn prev">❮</button>
            <div class="slider-track">
                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>

                <div class="product-card">
                    <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                        alt="SM180S">
                    <h3>Máy mài móng tay SM180S</h3>
                    <p class="price">
                        <span class="old-price">500,000đ</span>
                        <span class="new-price">270,000đ</span>
                    </p>
                    <button>Mua ngay</button>
                </div>
            </div>
            <button class="slider-btn next">❯</button>
        </div>
    </section>

    <section class="banner-con">
        <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600" alt="">
    </section>
    <section class="related-products">
        <h2>Sản phẩm liên quan</h2>
        <p>Ưu đãi tháng này - Đẹp lung linh chỉ với giá ưu đãi!</p>
        <div class="product-list">
            <div class="product-item">
                <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Gold Foil Flakes">
                <h3>12-Color Gold Foil Flakes</h3>
                <p class="price">
                    <span class="old-price">400,000đ</span>
                    <span class="new-price">270,000đ</span>
                </p>
                <button>Mua ngay</button>
            </div>
            <div class="product-item">
                <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Gold Foil Flakes">
                <h3>12-Color Gold Foil Flakes</h3>
                <p class="price">
                    <span class="old-price">400,000đ</span>
                    <span class="new-price">270,000đ</span>
                </p>
                <button>Mua ngay</button>
            </div>
            <div class="product-item">
                <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Gold Foil Flakes">
                <h3>12-Color Gold Foil Flakes</h3>
                <p class="price">
                    <span class="old-price">400,000đ</span>
                    <span class="new-price">270,000đ</span>
                </p>
                <button>Mua ngay</button>
            </div>
            <div class="product-item">
                <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Hộp hỗn hợp">
                <h3>Vỏ hỗn hợp 12 màu</h3>
                <p class="price">
                    <span class="old-price">400,000đ</span>
                    <span class="new-price">270,000đ</span>
                </p>
                <button>Mua ngay</button>
            </div>
            <div class="product-item">
                <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                    alt="Đá móng tay">
                <h3>120 chiếc đá móng tay</h3>
                <p class="price">
                    <span class="old-price">400,000đ</span>
                    <span class="new-price">270,000đ</span>
                </p>
                <button>Mua ngay</button>
            </div>
            <!-- Lặp lại nếu cần -->
        </div>
    </section>
    <section id="tip-section">
        <div class="tip-section">
            <img src="https://www.melodysusie.com/cdn/shop/files/Nail_Gels-Fleurwee_Gels.jpg?v=1721810627&width=1600"
                alt="Tips" class="tip-image">
            <div class="tip-content">
                <h3>4 Mẹo Để Máy Khoan Móng Tay Được Lâu Dài</h3>
                <p>
                    Ngành công nghiệp làm móng đang có sự tăng trưởng nhanh chóng trong những năm gần đây. Để giữ máy khoan móng
                    tay bền lâu, hãy tuân thủ các nguyên tắc đúng cách.
                </p>
            </div>
        </div>
    </section>
</div>


<script>
    // script.js
    const track = document.querySelector('.carousel-track');
    const images = document.querySelectorAll('.carousel-img');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    let currentIndex = 0;

    // Chuyển slide
    function updateSlide(index) {
        const slideWidth = images[0].clientWidth;
        track.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    // Sự kiện nút "Next"
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlide(currentIndex);
    });

    // Sự kiện nút "Prev"
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateSlide(currentIndex);
    });


    // lướt sản phẩm sale vs sp liên quan
    // script.js
    const track1 = document.querySelector('.slider-track');
    const prevBtn1 = document.querySelector('.slider-btn.prev');
    const nextBtn1 = document.querySelector('.slider-btn.next');

    const cardWidth = document.querySelector('.product-card').clientWidth + 20; // Kích thước 1 card (bao gồm margin)
    let currentOffset = 0;

    // Chuyển sang sản phẩm tiếp theo
    nextBtn1.addEventListener('click', () => {
        const maxOffset = -(track1.scrollWidth - track1.clientWidth);
        currentOffset = Math.max(currentOffset - cardWidth, maxOffset);
        track1.style.transform = `translateX(${currentOffset}px)`;
    });

    // Quay lại sản phẩm trước
    prevBtn.addEventListener('click', () => {
        currentOffset = Math.min(currentOffset + cardWidth, 0);
        track.style.transform = `translateX(${currentOffset}px)`;
    });
</script>
</body>

</html>