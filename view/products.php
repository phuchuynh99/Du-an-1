<?php
// Tạo danh mục sản phẩm
$cataloglist = '';
foreach ($catalog_list as $category) {
    extract($category);
    $linkproducts = 'index.php?page=products&id_category='.$id;
    $cataloglist .= '<li class="product-page__item">
    <a href="'.$linkproducts.'">'.$name.'</a>
     </li>';
}

// Tạo danh sách sản phẩm
$productlistHTML = '';
foreach ($productlist as $product) {
    extract($product);
    $imgPath = ($img != "") ? './' . PATH_IMG . './' . $img : 'public/img/default_image.jpg';
    $linkDetail = 'index.php?page=productdetail&idproduct=' . $id;
    $productlistHTML .= '
    <div col-md-10 product-page__products>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
            <div class="product-card col-6 col-sm-4 col-md-3 m-4">
            <a href="' . $linkDetail .'">
            <img src="' . $imgPath . '" class="product-card__img" alt="' . $name . '" /> 
            </a>
                <div class="product-card__body">
                    <h6 class="product-card__title">' . $name . '</h6>
                    <p class="product-card__old-price">' . $price . 'đ</p>
                    <p class="product-card__price">' . $discount_price . 'đ</p>
                    <div class="product-card__actions">
                        <button class="product-card__cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                        <button class="product-card__buy-btn">Mua ngay</button>
                    </div>
                </div>
                </div>
    </div>            
            
        </div>';
}
?>
<div class="product-page container my-5">
    <div class="row g-3">
        <!-- Sidebar -->
        <div class="col-md-2 product-page__sidebar">
            <h5 class="product-page__title">DANH MỤC</h5>
            <ul class="product-page__list">
                <?= $cataloglist ?>
            </ul>
        </div>

        <!-- Product List -->
        <div class="col-md-10 product-page__products">
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-4 g-3">
                <?= $productlistHTML ?>
            </div>
        </div>
    </div>
</div>


