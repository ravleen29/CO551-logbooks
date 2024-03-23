<?php
header("Content-type: audio/wav");

$conn = mysqli_connect("localhost", "root", "", "logbook7");

$id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize the input to prevent SQL injection

$sql = "SELECT audio FROM monster WHERE id='$id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$audio = $row["audio"];

echo $audio;

mysqli_close($conn);
?>
