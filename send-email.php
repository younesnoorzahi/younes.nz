<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت داده‌های فرم
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // تنظیمات ایمیل
    $to = "mahmodquer213@gmail.com"; // ایمیل شما
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // ارسال ایمیل
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>