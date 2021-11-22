<?php
//get data from form    
$name = $_POST['name'];     
$email= $_POST['email'];  
$qualification= $_POST['qualification'];
$role= $_POST['role']; 
$file = $_POST['file']; 
//your mail    
$to = "xxx@yyy.com"; 
$subject = "Sub"; 
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n qualification =" . $qualification . "\r\n role =" . $role "\r\n file =" . $file;
$headers = "From: $email " . "\r\n" . 
"CC: xxx@yyy.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
} 
//redirect  
header("Location:https protocol");

?> 
 
