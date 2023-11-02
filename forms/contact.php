<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "gewersdeon61@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
