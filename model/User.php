<?php
// include_once "./models/connectmodel.php";
// class User extends ConnectModel{
//     public $db;
//     public function __construct(){
//         $this->db = new ConnectModel();
//     }
//     public function getAllUser(){
//         $sql = "SELECT * FROM user";
//         return $this->db->getAll($sql);
//     }
//     public function getOneId($id){
//         $sql = "SELECT * FROM user WHERE id = ?";
//         return $this->db->getOne($sql);
//     }
//     public function checkUser($username, $password){
//         $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
//         return $this->db->getOne($sql);
//     }
//     public function CreateUser($data){
//         extract($data);
//         $sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
//         // $params = [$data['name'],$data['email'],$data['password']];
//         return $sql = $this->db->insert($sql);
//     }
//     public function UpdateUser($data){
//         extract($data);
//         $sql = "UPDATE user SET username = '$username', password = '$password',email = '$email',address = '$address',phone = '$phone',name = '$name' WHERE id = ".$id;
//         // $params = [$data['name'],$data['email'],$id];
//         return $sql = $this->db->update($sql);
//     }
//     public function DeleteUser($id){
//         $sql = "DELETE FROM user WHERE id = ?";
//         return $this->db->update($sql,[$id]);
//     }
// }
include_once "./model/connect.php";

class User {
    public $db;
    
    public function __construct(){
        $this->db = new ConnectModel();
    }

    public function getAllUser(){
        $sql = "SELECT * FROM user";
        return $this->db->get_all($sql);
    }

    public function getOneId($id){
        $sql = "SELECT * FROM user WHERE id = ?";
        return $this->db->get_one($sql, [$id]);
    }

    public function checkUser($username, $password){
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        return $this->db->get_one($sql, [$username, $password]);
    }

    public static function CreateUser($data){
        $db = new ConnectModel();
        $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        return $db->insert($sql, [$data['username'], $data['email'], $data['password']]);
    }

    public static function UpdateUser($data){
        $db = new ConnectModel();
        extract($data);
        $sql = "UPDATE user SET username = ?, password = ?, email = ?, address = ?, phone = ?, name = ? WHERE id = ?";
        return $db->update($sql, [$username, $password, $email, $address, $phone, $name, $id]);
    }
    

    public function DeleteUser($id){
        $sql = "DELETE FROM user WHERE id = ?";
        return $this->db->delete($sql, [$id]);
    }
}
?>
