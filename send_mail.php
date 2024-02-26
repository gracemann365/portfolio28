<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $to = "gracemann365@gmail.com"; // Enter your email address here
    $subject = "New message from website contact form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Redirect back to the main page
        echo "<script>window.location.href = 'index.html';</script>";
        exit();
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
