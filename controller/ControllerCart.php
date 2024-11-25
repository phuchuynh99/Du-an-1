<?php

function getProductById($id)
{
    $sql = "SELECT * FROM product WHERE id=?";
    return pdo_getOne($sql, $id);
}
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case 'cart':
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

            if (empty($cart)) {
                header("Location: ?page=cart&message=empty");
                exit;
            }
            include_once "models/ModelProduct.php";
            foreach ($cart as &$pro) {
                $detail = getProductById($pro['id']);
                if ($detail) {
                    $pro['name'] = $detail['name'];
                    $pro['img'] = $detail['img'];
                    $pro['price'] = $detail['price'];
                    $pro['total'] = $pro['price'] * $pro['SoLuong'];
                } else {
                    $pro['name'] = "Product not found";
                    $pro['img'] = "placeholder.jpg";
                    $pro['price'] = 0;
                    $pro['total'] = 0;
                }
            }
            include_once "views/header.php";
            include_once "views/cart.php";
            include_once "views/footer.php";
            break;

        case 'addToCart':
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            $idPro = $_GET['id'];
            $inCart = false;

            foreach ($_SESSION['cart'] as &$productC) {
                if ($productC['id'] == $idPro) {
                    $productC['SoLuong']++;
                    $inCart = true;
                    break;
                }
            }

            if (!$inCart) {
                $_SESSION['cart'][] = [
                    "id" => $idPro,
                    "SoLuong" => 1
                ];
            }
            print_r($_SESSION['cart']);
            header('Location: index.php?page=cart&action=cart');
            break;

        case 'increase':
            $idPro = $_GET['id'];
            foreach ($_SESSION['cart'] as &$proD) {
                if ($proD['id'] == $idPro) {
                    $proD['SoLuong']++;
                    break;
                }
            }
            header("Location: index.php?page=cart&action=cart");
            exit;

        case 'decrease':
            $idPro = $_GET['id'];
            foreach ($_SESSION['cart'] as &$proD) {
                if ($proD['id'] == $idPro) {
                    $proD['SoLuong']--;
                    if ($proD['SoLuong'] <= 0) {
                        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($idPro) {
                            return $item['id'] != $idPro;
                        });
                    }
                    break;
                }
            }
            header("Location: index.php?page=cart&action=cart");
            exit;
        case 'delete':
            $index = $_GET['index'];
            array_splice($_SESSION['cart'], $index, 1);
            header("Location: index.php?page=cart&action=cart");
            exit;


        default:
            break;
    }
} else {
    header("Location: ?page=home&action=home");
    exit;
}
