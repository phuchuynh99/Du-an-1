<?php
include_once "connect.php";

function getproduct($id_category = 0) {
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE 1";
   if ($id_category > 0) {
       $sql .= " AND id_category = " . $id_category; // Lọc theo id_category
   }
   $sql .= " ORDER BY id DESC";
   return $db->get_all($sql);
}

function getsaleproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE discount_price > 0 ORDER BY discount_price DESC";
   return $db->get_all($sql);
}

function getviewproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC";
   return $db->get_all($sql);
}

function getfeatureproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE new = 1 ORDER BY id DESC";
   return $db->get_all($sql);
}

function get_related_product( $id_category, $id){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE id_category = ". $id_category." AND id <> ".$id." ORDER BY id DESC";
   return $db->get_all($sql);
}

function get_product_detail($id){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE id = ".$id;
   return $db->get_one($sql);
}

function get_idcatalog($id){
   $db = new ConnectModel();
   $sql = "SELECT idcatalog FROM product WHERE id = ".$id;
   $getone = $db->get_one($sql);
   
   extract($getone);
   return $idcatalog;
}

function ten_file_hinh($id){
   $db = new ConnectModel();
   $sql = "SELECT img FROM product WHERE id = ".$id;
   $img = $db->get_one($sql);
   extract($img);
   return $img; 
}

function update_product($id, $id_category, $img, $name, $price, $discount_price, $status,$description){
   $db = new ConnectModel();
   // Kiểm tra nếu có ảnh được cập nhật
   if($img != ""){
       // Cập nhật với ảnh mới
       $sql = "UPDATE product 
               SET img = '$img', 
                   id_category = '$id_category', 
                   name = '$name',
                   description= '$description', 
                   price = '$price', 
                   discount_price = '$discount_price', 
                   status = '$status' 
               WHERE id = ".$id;
   } else {
       // Nếu không có ảnh mới, giữ ảnh cũ
       $sql = "UPDATE product 
               SET id_category = '$id_category', 
                   name = '$name',
                   description= '$description', 
                   price = '$price', 
                   discount_price = '$discount_price', 
                   status = '$status' 
               WHERE id = ".$id;
   }
   $db->update($sql);
}



function delete_product($id){
   $db = new ConnectModel();
   $sql = "DELETE FROM product WHERE id = ".$id;
   $db->delete($sql);
   $tb = "Xóa thành công";
   return $tb;
}

function add_product($id_category, $img, $name, $price, $description) {
   $db = new ConnectModel();
   $sql = "INSERT INTO product(id_category, name, img, price, description) VALUES ('$id_category', '$name', '$img', '$price','$description')";
   $db->insert($sql);
}

function get_products_in_category($id_category) {
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE id_category = $id_category ORDER BY id DESC";
   return $db->get_all($sql);
}

function getNewestProductsByCategory($id_category) {
   $db = new ConnectModel();
   $sql = "SELECT * FROM product 
           WHERE id_category = :id_category
           ORDER BY create_at DESC
           LIMIT 2"; // Lấy 2 sản phẩm mới nhất
   return $db->get_all($sql, ['id_category' => $id_category]);
}





?>
