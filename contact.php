<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$message = $_POST['message'];


//email address of receiver
$to = "singamvaishnavi99@gmail.com";

$subject = 'Mail from 3ghr services in Hyderabad';

$txt = "Name =" .$name. "\r\n Phone Number =" .$phoneNumber. "\r\n Email =" .$email. "\r\n Message =" .$message. "\r\n Address =" .$address;

$header = "From: noreply@singamvaishnavi.com" . "\r\n" ."CC: singamvaishnavi99@gmail.com";

if($email!=NULL){
    mail($to,$subject,$txt,$header);
}

//redirect
{
    header("location: index.html");
}
?>