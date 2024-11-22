<?php
include_once "connect.php";

// Lấy danh sách liên hệ
function get_contacts()
{
    $db = new ConnectModel();
    // Lấy tất cả các liên hệ mà không cần id_user
    $sql = "SELECT * FROM contact ORDER BY created_at DESC";
    return $db->get_all($sql);
}


// Lấy chi tiết liên hệ theo ID
function get_contact_detail($id)
{
    $db = new ConnectModel();
    $sql = "SELECT * FROM contact WHERE id = :id";
    return $db->get_one($sql, [':id' => $id]);
}

// Thêm mới liên hệ
function addContact($name, $email, $phone, $message)
{
    $db = new ConnectModel();
    $sql = "INSERT INTO contact (name, email, phone, message) 
            VALUES (:name, :email, :phone, :message)";
    $db->insert($sql, [
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':message' => $message
    ]);
    return "Thêm liên hệ thành công";
}



// Cập nhật liên hệ
function update_contact($id, $name, $email, $phone, $message)
{
    $db = new ConnectModel();
    $sql = "UPDATE contact 
            SET name = :name, email = :email, phone = :phone, message = :message
            WHERE id = :id";
    $db->update($sql, [
        ':id' => $id,
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':message' => $message
    ]);
    return "Cập nhật liên hệ thành công";
}

// Xóa liên hệ
function delete_contact($id)
{
    $db = new ConnectModel();
    $sql = "DELETE FROM contact WHERE id = :id";
    $result = $db->delete($sql, [':id' => $id]);

    return $result ? "Xóa liên hệ thành công" : "Xóa liên hệ không thành công";
}
