<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "singamvaishnavi99@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    // If someone tries to access this file directly, redirect them back to the form
    header("Location: index.html");
    exit;
}
?>
