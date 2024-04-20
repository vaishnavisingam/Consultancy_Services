<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address']; // corrected variable name
$message= $_POST['message'];

$to = "singamvaishnavi99@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n Address =" . $address; // corrected variable name
$headers = "From: noreply@3ghrservices.com" . "\r\n" . // corrected email address
"CC: singamvaishnavi99@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
