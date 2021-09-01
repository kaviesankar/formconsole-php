<?php
  

$uname = $_POST['uname'];
$cname = $_POST['cname'];
$msg = $_POST['msg'];
 
$to = "mail@domain.com";
$subject = "#";
$txt ="Name = ". $uname . "\r\n  C Name = " . $cname .  "\r\n Message =" . $msg;
$headers = "From: $email " . "\r\n" .
"CC: "#";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
 
if (!empty($uname) || !empty($cname) || !empty($msg) )
{

$host = "localhost"; 
$dbusername = "root";
$dbname = "file";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From invoice Where email = ? Limit 10";
  $INSERT = "INSERT Into invoice (uname , cname, msg )values(?,?,?)";
 
//Prepare statement  
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $uname,$cname,$msg);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
 
?> 
