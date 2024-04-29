<?php
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];


//email address of receiver
$to = "singamvaishnavi99@gmail.com";

$subject = 'Mail 3ghr services in Hyderabad';

$txt = "Name =" .$name. "\r\n Phone Number =" .$phoneNumber. "\r\n Email =" .$email. "\r\n Address =" .$address. "\r\n Message =" .$message; 

$header = "From: noreply@singamvaishnavi99.com" . "\r\n" ."CC: singamvaishnavi99@gmail.com";

if($email!=NULL){
    mail($to,$subject,$txt,$header);
}

//redirect
{
    header("location: index.html");
}
?>