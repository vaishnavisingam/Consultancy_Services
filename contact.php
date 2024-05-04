<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$message = $_POST['message'];


//email address of receiver
$to = "singamvaishnavi99@gmail.com";

$subject = 'Mail from 3ghr services in Hyderabad';

$txt = "name =" .$name. "\r\n email =" .$email. "\r\n phoneNumber=" .$phoneNumber. "\r\n address=" .$address. "\r\n message =" .$message;

$header = "From: noreply@singamvaishnavi.com" . "\r\n" ."CC: singamvaishnavi99@gmail.com";

if (function_exists('mail')) {
   
    // Call the mail function
    mail($to, $subject,$header, $message, );
    
} else {
    // Handle the error gracefully
   
    echo "The mail function is not available on this server.";
}
?>