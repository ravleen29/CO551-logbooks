<?php	
$mysqli = new mysqli("localhost", "root", "", "db1_gwalke01");

	// Connect to server and select database
	$sql = "SELECT * from test";
	// Execute sql statement
	$result = $mysqli->query($sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>
