<?php
//get data from form  
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Message= $_POST['Message'];
$MobileNumber= $_POST['Mobile Number']
$to = "swaroopareddy918@gmail.com";
$subject = "Mail From cadconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $MobileNumber;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>