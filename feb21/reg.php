<?php
session_start();
$host="localhost";  
$username="root"; 
$password="";  
$db_name="employee"; 
$tbl_name="empl";  
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$ename = $_POST['ename'];
$eid = $_POST['eid'];
$phone = $_POST['phone'];
$age=$_POST['age'];
$sal = $_POST['salary'];
$loc = $_POST['location'];
$pos = $_POST['position'];
$email = $_POST['email'];

//Insert Query of SQL
$query = mysqli_query($con,"insert into empl values('$eid','$ename','$pos','$sal','$age','$loc','$phone','$email')");
$query1=mysqli_query($con,"insert into login values('$email','1234')");
}
else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
