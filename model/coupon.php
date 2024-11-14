<?php
include_once "connect.php";

// Hàm tạo mã giảm giá
function createCoupon($code, $discount, $expiry_date) {
    global $db;
    $stmt = $db->prepare("INSERT INTO coupons (code, discount, expiry_date) VALUES (?, ?, ?)");
    return $stmt->execute([$code, $discount, $expiry_date]);
}

// Hàm kiểm tra mã giảm giá
function validateCoupon($code) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM coupons WHERE code = ? AND expiry_date >= NOW()");
    $stmt->execute([$code]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!-- CREATE TABLE coupons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(50) UNIQUE NOT NULL,
    discount INT NOT NULL,
    expiry_date DATE NOT NULL
); -->
