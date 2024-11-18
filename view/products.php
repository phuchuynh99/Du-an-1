<?php
$categories = [
    "Sơn móng",
    "Dụng cụ",
    "Thiết bị làm móng",
    "Sản phẩm trang trí móng",
    "Móng giả"
];

$products = [
    [
        "name" => "Dũa móng tay Halfmoon",
        "original_price" => "300,000₫",
        "discount_price" => "270,000₫",
        "image" => "public/img/mài 1.webp",
        "alt" => "Dũa móng tay Halfmoon"
    ],
    [
        "name" => "Sơn móng tay Classic Red",
        "original_price" => "150,000₫",
        "discount_price" => "120,000₫",
        "image" => "public/img/mài 2.webp",
        "alt" => "Sơn móng tay Classic Red"
    ],
    [
        "name" => "Máy hơ 001",
        "original_price" => "200,000₫",
        "discount_price" => "180,000₫",
        "image" => "public/img/máy hơ 1.webp",
        "alt" => "Kềm cắt da Inox"
    ],
    [
        "name" => "Máy hơ 002",
        "original_price" => "400,000₫",
        "discount_price" => "350,000₫",
        "image" => "public/img/máy hơ 2.webp",
        "alt" => "Bộ dụng cụ làm móng 5 món"
    ],
    [
        "name" => "Máy hơ 003",
        "original_price" => "400,000₫",
        "discount_price" => "350,000₫",
        "image" => "public/img/máy hơ 3.webp",
        "alt" => "Bộ dụng cụ làm móng 5 món"
    ],
    [
        "name" => "Máy hơ 004",
        "original_price" => "400,000₫",
        "discount_price" => "350,000₫",
        "image" => "public/img/máy hơ 4.webp",
        "alt" => "Bộ dụng cụ làm móng 5 món"
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="product-container container my-4">
        <div class="row">
            <!-- Sidebar -->
            <aside class="product-sidebar col-md-3 mb-4">
                <div class="product-category bg-white p-3 rounded shadow-sm">
                    <h4 class="product-category-title fw-bold">DANH MỤC</h4>
                    <ul class="product-category-list list-unstyled mt-3">
                        <?php foreach ($categories as $category): ?>
                            <li><a href="#" class="text-decoration-none text-dark"><?= htmlspecialchars($category) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>

            <!-- Products -->
            <section class="product-list col-md-9">
                <div class="row g-4">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card text-center shadow-sm p-3">
                                <img src="<?= htmlspecialchars($product['image']) ?>" class="product-img img-fluid" alt="<?= htmlspecialchars($product['alt']) ?>">
                                <h5 class="product-name mt-3"><?= htmlspecialchars($product['name']) ?></h5>
                                <p class="product-original-price text-muted"><del><?= htmlspecialchars($product['original_price']) ?></del></p>
                                <p class="product-discount-price"><?= htmlspecialchars($product['discount_price']) ?></p>
                                <div class="product-actions d-flex justify-content-center align-items-center gap-2 mt-3">
                                    <button class="product-btn-cart d-flex align-items-center">
                                        <i class="bi bi-cart"></i>
                                    </button>
                                    <button class="product-btn-buy">Mua ngay</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
