<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];


//email address of receiver
$to = "singamvaishnavi99@gmail.com";

$subject = 'Mail from 3G HR Services in Hyderabad';

$txt = "Name =" .$name. "\r\n Phone Number =" .$phone. "\r\n Email =" .$email. "\r\n Message =" .$message. "\r\n Address =" .$address;

$header = "From: " . "\r\n" ."CC: ";

if($email!=NULL){
    mail($to,$subject,$txt,$header);
}

//redirect
{
    header("location: index.html");
}
?>