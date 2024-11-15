<?php
include_once "connect.php";


function get_coupon($id=0){
    $db = new ConnectModel();
    $sql = "SELECT * FROM coupons ORDER BY end_date DESC";
    return $db->get_all($sql);
 }

function get_coupon_detail($id){
    $db = new ConnectModel();
   $sql = "SELECT * FROM coupons WHERE id = ".$id;
   return $db->get_one($sql);
}

// Hàm tạo mã giảm giá
function add_coupon($code, $discount, $end_date) {
    $db = new ConnectModel();
    $sql = "INSERT INTO coupons (code, discount, end_date) VALUES ('$code', $discount, '$end_date')";
    $db->insert($sql);
}

// Hàm cập nhật mã giảm giá
function update_coupon($id, $code, $discount, $end_date) {
    $db = new ConnectModel();
    $sql = "UPDATE coupons SET code='$code', discount=$discount, expiry_date='$end_date' WHERE id=" . $id;
    $db->update($sql);
    $tb = "Cập nhật mã giảm giá thành công";
    return $tb;
}

// Hàm xóa mã giảm giá
function delete_coupon($id) {
    $db = new ConnectModel();
    $sql = "DELETE FROM coupons WHERE id=" . $id;

    // Kiểm tra điều kiện trước khi xóa (nếu có)
    // Ví dụ: kiểm tra xem coupon có đang được sử dụng hay không, nếu cần

    $result = $db->delete($sql);
    
    if ($result) {
        $tb = "Xóa mã giảm giá thành công";
    } else {
        $tb = "Xóa mã giảm giá không thành công";
    }

    return $tb;
}


// Hàm kiểm tra mã giảm giá
function validateCoupon($code) {
    $db = new ConnectModel();
    $sql = "SELECT * FROM coupons WHERE code = :code AND end_date >= NOW()";
    // Sử dụng phương thức get_one của ConnectModel để lấy một bản ghi duy nhất
    return $db->get_one($sql, [':code' => $code]);
}


?>

