<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit();
}

// Kiểm tra quyền truy cập của người dùng
if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'user') {
    // Nếu không phải admin hoặc user, chuyển hướng về trang login
    header("Location: login.php");
    exit();
}
?>
