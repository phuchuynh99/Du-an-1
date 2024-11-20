<?php
require_once 'mailer_helper.php';
require_once 'model/connect.php'; // File kết nối database

function forgotPassword($email)
{
    // Kiểm tra email có tồn tại trong cơ sở dữ liệu không
    $db = Database::getConnection();
    $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Tạo token reset mật khẩu
        $token = bin2hex(random_bytes(16));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Lưu token vào database
        $stmt = $db->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $stmt->execute([$token, $expiry, $email]);

        // Gửi email reset mật khẩu
        $resetLink = "http://yourwebsite.com/reset_password.php?token=$token";
        $subject = "Lấy lại mật khẩu";
        $body = "Click vào link sau để đặt lại mật khẩu: <a href='$resetLink'>$resetLink</a>";

        $result = sendMail($email, $subject, $body);

        if ($result === true) {
            echo "Email lấy lại mật khẩu đã được gửi. Vui lòng kiểm tra hộp thư.";
        } else {
            echo $result; // Hiển thị lỗi nếu có
        }
    } else {
        echo "Email không tồn tại trong hệ thống.";
    }
}