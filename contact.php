<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'singamvaishnavi99@gmail.com'; // Change this to your recipient email address
    $subject = 'New Contact Form Submission';
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message.</p>';
    }
} else {
    // If the request method is not POST, redirect back to the contact form
    header("Location: contact.html");
    exit;
}
?>
