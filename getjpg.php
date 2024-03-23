<?php
header("Content-type: image/jpeg");

$conn = mysqli_connect("localhost", "root", "", "logbook7");

$id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize the input to prevent SQL injection

$sql = "SELECT image FROM monster WHERE id='$id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$jpg = $row["image"];

echo $jpg;

mysqli_close($conn);
?>
