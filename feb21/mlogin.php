<?php
session_start();
 
$myemail=$_POST['username'];
$_SESSION['username'] = $myemail; 
$mypassword=$_POST['password']; 
if($myemail=="raj@gmail.com" && $mypassword="123"){ 
header("location:mhome.php");
}
else {
echo "Wrong Username or Password";
}
?>