<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './vendor/autoload.php';

function sendMail($to, $subject, $body)
{
    $mail = new PHPMailer(true);

    try {
        // Cấu hình SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'phuchnps39812@gmail.com'; // Email cá nhân
        $mail->Password   = 'ngocphuc0501.'; // Mật khẩu email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 8080;

        // Người gửi và người nhận
        $mail->setFrom('phuchnps39812@gmail.com', 'Webmaster');
        $mail->addAddress($to);

        // Nội dung email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Gửi email
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Lỗi gửi email: {$mail->ErrorInfo}";
    }
}
