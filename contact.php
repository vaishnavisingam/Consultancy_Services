<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // New phone field
    $address = $_POST['address']; // New address field
    $message = $_POST['message'];

    // Set the recipient email address. Update this to your email address.
    $to = "singamvaishnavi99@gmail.com";

    // Set the email subject.
    $subject = "New Contact Form Submission";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n"; // Include phone
    $email_content .= "Address: $address\n"; // Include address
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($to, $subject, $email_content, $email_headers)) {
        // If email is sent successfully.
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
    } else {
        // If an error occurred.
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
    }
}
?>