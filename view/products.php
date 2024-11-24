<?php
$cataloglist = '';
foreach ($catalog_list as $category) {
    extract($category);
    $linkproduct = 'index.php?page=product&id_category=' . $id;
    $cataloglist .= '<li>
                        <label class="d-flex align-items-center">
                            <a href="' . $linkproduct . '" class="text-decoration-none text-dark">' . $name . '</a>
                        </label>
                     </li>';
}
?>
<div class="container-products">

    <section class="product-sidebar-section" id="product-sidebar">
        <div class="row">
            <div class="product-col4 col-md-3">
                <aside class="product-sidebar">
                    <div class="product-category bg-white p-3 rounded shadow-sm">
                        <h4 class="product-category-title fw-bold">DANH MỤC</h4>
                        <ul class="product-category-list list-unstyled mt-3">
                            <?= $cataloglist ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="products-section" id="products">
        <div class="row">
            <div class="product-col6 col-md-9">
                <div class="row g-4">
                    <?php
                    foreach ($productlist as $product) {
                        extract($product);
                        $imgPath = ($img != "") ? './' . PATH_IMG . './' . $img : 'default_image.jpg';
                        $linkDetail = 'index.php?page=productDetail&idproduct=' . $id;
                        echo '
                            <div class="col-md-3 product-card text-center shadow-sm p-3 border rounded">
                                <a href="' . $linkDetail . '" class="text-decoration-none text-dark">
                                    <img src="' . $imgPath . '" class="product-img img-fluid mb-2" alt="' . $name . '">
                                </a>
                                <h5 class="product-name">' . $name . '</h5>
                                <p class="product-original-price text-muted mb-1"><del>' . $discount_price . 'đ</del></p>
                                <p class="product-discount-price text-danger fw-bold">' . $price . 'đ</p>
                                <div class="product-actions d-flex justify-content-center align-items-center gap-2 mt-3">
                                    <button class="product-btn-cart px-3 py-2 d-flex align-items-center">
                                        <i class="fa fa-cart-plus me-2"></i> Giỏ hàng
                                    </button>
                                    <button class="product-btn-buy px-3 py-2">Mua ngay</button>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>