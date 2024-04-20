<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['$address'];
$message= $_POST['message'];

$to = "singamvaishnavi99@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n address =" . $address;
$headers = "From: noreply@vaishnavi99.com" . "\r\n" .
"CC: singamvaishnavi99@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>