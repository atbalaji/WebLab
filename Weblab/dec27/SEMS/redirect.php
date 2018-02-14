<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['username'];
$email = $_POST['password'];

if($name !=''&& $email !=''&& $contact !=''&& $address !='')
{
header("Location:a.html");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>