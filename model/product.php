<?php
include_once "connect.php";

function getproduct($id_category=0){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE 1";
   if($id_category > 0){
      $sql .= " AND id_category=".$id_category;
   }
   $sql .= " ORDER BY id DESC";
   return $db->get_all($sql);
}

function getsaleproduct(){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE promotion > 0 ORDER BY promotion DESC";
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

function get_related_product($idcatalog, $idproduct){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE idcatalog = ".$idcatalog." AND id <> ".$idproduct." ORDER BY id DESC";
   return $db->get_all($sql);
}

function get_product_detail($idproduct){
   $db = new ConnectModel();
   $sql = "SELECT * FROM product WHERE id = ".$idproduct;
   return $db->get_one($sql);
}

function get_idcatalog($idproduct){
   $db = new ConnectModel();
   $sql = "SELECT idcatalog FROM product WHERE id = ".$idproduct;
   $getone = $db->get_one($sql);
   extract($getone);
   return $idcatalog;
}

function ten_file_hinh($id){
   $db = new ConnectModel();
   $sql = "SELECT img FROM product WHERE id = ".$id;
   $ten_file_hinh = $db->get_one($sql);
   extract($ten_file_hinh);
   return $img; 
}

function update_product($id, $idcatalog, $ten_file_hinh, $name, $price){
   $db = new ConnectModel();
   if($ten_file_hinh != ""){
      $sql = "UPDATE product SET img = '$ten_file_hinh', idcatalog = '$idcatalog', name = '$name', price = '$price' WHERE id = ".$id;
   } else {
      $sql = "UPDATE product SET idcatalog = '$idcatalog', name = '$name', price = '$price' WHERE id = ".$id;
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

function add_product($idcatalog, $ten_file_hinh, $name, $price) {
   $db = new ConnectModel();
   $sql = "INSERT INTO product(idcatalog, name, img, price) VALUES ('$idcatalog', '$name', '$ten_file_hinh', '$price')";
   $db->insert($sql);
}
?>
