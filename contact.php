<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Email address of receiver
    $to = "singamvaishnavi99@gmail.com";

    $subject = 'Mail from 3G HR Services in Hyderabad';

    // Compose email body
    $txt = "Name: " . $name . "\r\n Email: " . $email . "\r\n Phone: " . $phone . "\r\n Address: " . $address . "\r\n Message: " . $message;

    // Additional headers
    $headers = "From: " . $email . "\r\n" . "CC: ";

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
}

// Redirect back to the index page
header("location: index.html");
?>
