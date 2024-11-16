<?php
include_once "connect.php";

function get_catalog(){
    $db = new ConnectModel();
    $sql = "SELECT * FROM category ORDER BY name";
    return $db->get_all($sql);
}

function get_catalog_one($id){
    $db = new ConnectModel();
    $sql = "SELECT * FROM category WHERE id=".$id;
    return $db->get_one($sql);
}

function set_catalog($id, $name, $status){
    $db = new ConnectModel();
    // Cập nhật cả tên và trạng thái
    $sql = "UPDATE category 
            SET name = '$name', 
                status = '$status' 
            WHERE id = ".$id;
    $db->update($sql);
}


function delete_catalog($id){
    $db = new ConnectModel();
    $sql = "DELETE FROM category WHERE id=".$id;
    $dssp = getproduct($id);
    if(count($dssp) > 0){
        $tb = "Danh mục này hiện có ".count($dssp)." sản phẩm. Bạn không được phép xóa";
    } else {
        $db->delete($sql);
        $tb = "Xóa danh mục thành công";
    }
    return $tb;
}

function add_catalog($name){
    $db = new ConnectModel();
    $sql = "INSERT INTO category(name) VALUES ('$name')";
    $db->insert($sql);
}
?>
