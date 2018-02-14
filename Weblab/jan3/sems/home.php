<!DOCTYPE html>
<html>
<head>
<title>Staff Registration</title>
<style>
.form_div {
background-color:#99FF33;
}
</style>
</head>
<body><?php
session_start();
$host="localhost";  
$username="root"; 
$password="";  
$db_name="sems"; 
$tbl_name="user";  
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$game = $_POST['game'];
$web = $_POST['web'];
$lab = $_POST['lab'];
$user=$_SESSION['username'];
//Insert Query of SQL
$query = mysqli_query($con,"insert into staff values('$game','$web','$lab','$user')");
header("location:register.php");
}
else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}


?>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
</div>
<form action="home.php" method="post">
<h2>Form</h2>
<label>Game:</label>
<input class="input" name="game" type="text" value="">
<label>Web:</label>
<input class="input" name="web" type="text" value="">
<label>Lab:</label>
<input class="input" name="lab" type="text" value="">
<input class="submit" name="submit" type="submit" value="Register">
</form>
</div>
</div>
</body>
</html>