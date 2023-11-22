<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Địa chỉ email của bạn
    $to = "youremail@example.com";

    // Tiêu đề email
    $subject = "Thông tin từ Form Liên hệ";

    // Nội dung email
    $email_body = "Tên: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Nội dung: $message\n";

    // Gởi email
    mail($to, $subject, $email_body);

    // Chuyển hướng người dùng sau khi gởi thông tin
    header("Location: thank_you.html");
}
?>
