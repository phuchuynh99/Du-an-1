<?php
include_once "connect.php";

//Tổng danh mục
function get_total_category() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM category"; // Truy vấn đếm tổng số lượng sản phẩm
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; // Trả về tổng số sản phẩm
}

//Tổng sản phẩm
function get_total_product() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM product"; // Truy vấn đếm tổng số lượng sản phẩm
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; // Trả về tổng số sản phẩm
}

//Tổng coupon
function get_total_coupons() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM coupons"; // Truy vấn đếm tổng số lượng sản phẩm
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; // Trả về tổng số sản phẩm
}
//Tổng liên hệ
function get_total_contact() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM contact"; // Truy vấn đếm tổng số lượng sản phẩm
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; // Trả về tổng số sản phẩm
}

//Tổng bill
function get_total_bill() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM bill"; // Truy vấn đếm tổng số lượng sản phẩm
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; // Trả về tổng số sản phẩm
}

//Tổng user
function get_total_users() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM users";
    $result = $db->get_one($sql); // Lấy kết quả
    return $result['total']; 
}

// bill mới
function total_new_bill() {
    $db = new ConnectModel();
    $sql = "SELECT COUNT(*) AS total FROM bill WHERE status = 0";
    $result = $db->get_one($sql);
    return isset($result['total']) ? $result['total'] : 0; // Trả về 0 nếu không có hóa đơn mới
}


?>