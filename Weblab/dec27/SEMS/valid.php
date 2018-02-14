<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include('config.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $captcha=$_POST['my-hidden-input'];
      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<style type="text/css">
.a{
	margin-right:100px;
	}
	.capbox {
	background-color: #92D433;
	border: #B3E272 0px solid;
	border-width: 0px 12px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;
	background-color: #DBF3BA;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #FFFFFF;
	padding: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }


</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><b> SEMS </b></title>
</head>
<body>
<h1> SEMS </h1><hr /><br /><br />
<div align="middle" style="background-color:#00CCFF">
<form method="post" action="" >
<label class="a">Username</label> <input type="text" id="user" required /><br /><br />
<label class="a">Password</label><input type="password" id="pass" required /><br /><br />
<div class="capbox">

<div id="CaptchaDiv"><?php rand(10000,99999) ?></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha" name="my-hidden-input">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br><br>
<!-- END CAPTCHA -->
<button type="submit" value="submit" align="center" ><b>Submit</b></button>
</form>

</div>

</body>
</html>
