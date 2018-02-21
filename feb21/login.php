<?php
session_start();
$host="localhost";  
$username="root"; 
$password="";  
$db_name="employee"; 
$tbl_name="login";
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
$myusername=$_POST['username'];
$_SESSION['$myusername'] = true; 
$mypassword=$_POST['password']; 
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){ 
header("location:home.php");
}
else {
echo "Wrong Username or Password";
}
?>