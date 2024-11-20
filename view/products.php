<?php
$cataloglist = '';
foreach ($catalog_list as $category) {
    extract($category);
    $cataloglist .= '<li>
                        <label class="d-flex align-items-center">
                           
                            <a href="#" class="text-decoration-none text-dark">'.$name.'</a>
                        </label>
                     </li>';
}
?>

<section class="products" id="products">
    <div class="row">
        <!-- Sidebar -->
        <div class="product-col4">
            <aside class="product-sidebar">
                <div class="product-category bg-white p-3 rounded shadow-sm">
                    <h4 class="product-category-title fw-bold">DANH MỤC</h4>
                    <ul class="product-category-list list-unstyled mt-3">
                        <?=$cataloglist?>
                    </ul>
                </div>
            </aside>
        </div>

        <!-- Product -->
        <div class="product-col6">
            <div class="row g-4">
                <?php 
                    foreach ($productlist as $product) {
                        extract($product);
                        if ($img != "") {
                            $img = './' . PATH_IMG . './' . $img;
                        }
                        echo '
                                <div class="product-card text-center shadow-sm p-3">
                                    <a href="product-detail" class="text-decoration-none text-dark">
                                        <img src="' . $img . '" class="product-img img-fluid" alt="' . $name . '">
                                    </a>
                                    <h5 class="product-name mt-3">' . $name . '</h5>
                                    <p class="product-original-price text-muted"><del>' . $discount_price . '</del></p>
                                    <p class="product-discount-price text-danger fw-bold">' . $price . '</p>
                                    <div class="product-actions d-flex justify-content-center align-items-center gap-2 mt-3">
                                        <button class="product-btn-cart d-flex align-items-center">
                                            <i class="fa-regular fa-cart-plus"></i>
                                        </button>
                                        <button class="product-btn-buy">Mua ngay</button>
                                    </div>
                                </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>


