<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#logout{
position:fixed;
top:500px;
left:1000px;
}
</style>
</head>
<body>

<?php
session_start();
$user=$_SESSION['username'];
echo $user." have successfully registered for three courses";
?>
<a href="login.html"><button value="Logout" id="logout"></button></a>
</body>
</html>
