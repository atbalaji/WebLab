<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "employee");
$manager=$_SESSION['username'];

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 ?><?php 
 echo "Welcome $manager"
 ?>
 <html>
 <head></head><body>
 <form method="post" action="mhome.php">
 <h2>Enter the id of employee </h2><input type="text" name="eid" /><input type="submit" name="submit" type="submit"/>
 </form>
 <form method="post" action="mhome.php">
 <h2>Enter the salary to filter </h2><input type="text" name="salary" /><input type="submit" name="submit2" type="submit"/>
 </form><form method="post" action="mhome.php">
 <h2>Enter the location to filter </h2><input type="text" name="location" /><input type="submit" name="submit3" type="submit"/>
 </form><form action="logout.php" method="post"> <a href ="mlogin.html">Sign out</a></form></body>
 </html>
 <?php
// Attempt select query execution
if(isset($_POST['submit'])){
	$eid=$_POST['eid'];
$sql = "SELECT * FROM empl where eid='$eid'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>eid</th>";
                echo "<th>ename</th>";
                echo "<th>position</th>";
                echo "<th>salary</th>";
				echo "<th>age</th>";
				echo "<th>location</th>";
				echo "<th>phone</th>";
				echo "<th>email</th>";
			echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['eid'] . "</td>";
                echo "<td>" . $row['ename'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            
			echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}?>
 <?php
// Attempt select query execution
if(isset($_POST['submit2'])){
	$salary=$_POST['salary'];
$sql = "SELECT * FROM empl where salary>'$salary'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>eid</th>";
                echo "<th>ename</th>";
                echo "<th>position</th>";
                echo "<th>salary</th>";
				echo "<th>age</th>";
				echo "<th>location</th>";
				echo "<th>phone</th>";
				echo "<th>email</th>";
			echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['eid'] . "</td>";
                echo "<td>" . $row['ename'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            
			echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}?>

 <?php
// Attempt select query execution
if(isset($_POST['submit3'])){
	$loc=$_POST['location'];
$sql = "SELECT * FROM empl where location='$loc'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>eid</th>";
                echo "<th>ename</th>";
                echo "<th>position</th>";
                echo "<th>salary</th>";
				echo "<th>age</th>";
				echo "<th>location</th>";
				echo "<th>phone</th>";
				echo "<th>email</th>";
			echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['eid'] . "</td>";
                echo "<td>" . $row['ename'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            
			echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>