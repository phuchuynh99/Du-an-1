<?php
include_once "../model/connect.php";

function getAllUser() {
    $db = new ConnectModel();
    $sql = "SELECT * FROM users";
    return $db->get_all($sql);
}

function getOneUserById($id) {
    $db = new ConnectModel();
    $sql = "SELECT * FROM users WHERE id = ?";
    return $db->get_one($sql, [$id]);
}

// Kiểm tra người dùng với mật khẩu đã mã hóa
function checkUser($username, $password) {
    $db = new ConnectModel();
    $sql = "SELECT * FROM users WHERE username = ?";
    $user = $db->get_one($sql, [$username]);
    
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

// Tạo người dùng mới với mật khẩu mã hóa
function addUser($data) {
    $db = new ConnectModel();
    $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
    return $db->insert($sql, [$data['username'], $data['email'], $hashedPassword, $data['role']]);
}

// Cập nhật người dùng, bao gồm mã hóa lại mật khẩu nếu có thay đổi
function updateUser($data) {
    $db = new ConnectModel();
    $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
    $sql = "UPDATE users SET username = ?, password = ?, email = ?, address = ?, phone = ?, name = ? WHERE id = ?";
    return $db->update($sql, [
        $data['username'], $hashedPassword, $data['email'], 
        $data['address'], $data['phone'], $data['name'], $data['id']
    ]);
}

function deleteUser($id) {
    $db = new ConnectModel();
    $sql = "DELETE FROM users WHERE id = ?";
    return $db->delete($sql, [$id]);
}

// Hàm kiểm tra vai trò user/admin
function checkUserRole($username, $password) {
    $db = new ConnectModel();
    $sql = "SELECT * FROM users WHERE username = ?";
    $user = $db->get_one($sql, [$username]);
    
    if ($user && password_verify($password, $user['password'])) {
        return $user['role'] === 'admin' ? 'admin' : 'user';
    }
    return false; // Trả về false nếu không tìm thấy người dùng
}



























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


// include_once "./model/connect.php";

// class User {
//     public $db;
    
//     public function __construct(){
//         $this->db = new ConnectModel();
//     }

//     public function getAllUser(){
//         $sql = "SELECT * FROM user";
//         return $this->db->get_all($sql);
//     }

//     public function getOneId($id){
//         $sql = "SELECT * FROM user WHERE id = ?";
//         return $this->db->get_one($sql, [$id]);
//     }

//     public function checkUser($username, $password){
//         $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
//         return $this->db->get_one($sql, [$username, $password]);
//     }

//     public static function CreateUser($data){
//         $db = new ConnectModel();
//         $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
//         return $db->insert($sql, [$data['username'], $data['email'], $data['password']]);
//     }

//     public static function UpdateUser($data){
//         $db = new ConnectModel();
//         extract($data);
//         $sql = "UPDATE user SET username = ?, password = ?, email = ?, address = ?, phone = ?, name = ? WHERE id = ?";
//         return $db->update($sql, [$username, $password, $email, $address, $phone, $name, $id]);
//     }
    

//     public function DeleteUser($id){
//         $sql = "DELETE FROM user WHERE id = ?";
//         return $this->db->delete($sql, [$id]);
//     }
// }
?>
