<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobseeker = $_POST['jobseeker'];
    $employer = $_POST['employer'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Email address of receiver
    $to = "singamvaishnavi99@gmail.com";
    $subject = 'Mail from 3ghr services in Hyderabad';

    $txt = "jobseeker: " . $jobseeker .  "\r\nemployer: " . $employer .   "\r\nName: " . $name . "\r\nEmail: " . $email . "\r\nPhone Number: " . $phoneNumber . "\r\nAddress: " . $address . "\r\nMessage: " . $message;

    $headers = "From: noreply@singamvaishnavi.com" . "\r\n" . "CC: singamvaishnavi99@gmail.com";

    if (mail($to, $subject, $txt, $headers)) {
        echo "Mail sent successfully!";
    } else {
        echo "Failed to send mail.";
    }
}
?>
