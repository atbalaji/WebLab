<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "employee");
$manager=$_SESSION['username'];
if(!$_SESSION['$manager']))
	header("location:login.php");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 ?><html>
 <head>
</head>
<body><?php echo $manager ?><br><br><form action="logout.php" method="post"><input type="hidden" value="<?php echo $manager?>"/> <a href ="mlogin.html">Sign out</a></form></body></body> 
</html>
 <?php
// Attempt select query execution

	
$sql = "SELECT * FROM empl where email='$manager'";
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

 
// Close connection
mysqli_close($link);
?>