<?php
//get data from form  
$name = $_POST['name'];
$lstname = $_POST['lstname'];
$email= $_POST['email'];
$number = $_POST['mno'];
$message= $_POST['message'];
$to = "nitinsrma9944@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Lastname = ". $lstname . "\r\n  Email = " . $email . "\r\n Number = ". $number . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo "mail sent";
}
//redirect
header("Location:thankyou.html");
?>