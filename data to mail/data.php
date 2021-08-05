<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$qualification= $_POST['qualification'];
$role= $_POST['role'];
$file = $_POST['file'];
$to = "jobs@foefox.com";
$subject = "Jobs From Foefox";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n qualification =" . $qualification . "\r\n role =" . $role "\r\n file =" . $file;
$headers = "From: $email " . "\r\n" .
"CC: jobs@foefox.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:https://www.foefox.com/verify/jobs/");
?>
