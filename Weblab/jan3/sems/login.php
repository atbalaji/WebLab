<?php
session_start();
$host="localhost";  
$username="root"; 
$password="";  
$db_name="sems"; 
$tbl_name="user";  
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
$myusername=$_POST['username'];
$_SESSION['username'] = $myusername; 
$mypassword=$_POST['password']; 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){ 
header("location:home.php");
}
else {
echo "Wrong Username or Password";
}
?>