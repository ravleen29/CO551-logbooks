<?php
// Establish database connection
$mysqli = new mysqli("localhost", "root", "", "db1_gwalke01");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insert data into the database
$sqlInsert = "INSERT INTO test (name, email, phone_number) ";
$sqlInsert .= "VALUES ('" . $mysqli->real_escape_string($_POST['txtName']) . "', 
'" . $mysqli->real_escape_string($_POST['txtEmail']) . "', '" . $mysqli->real_escape_string($_POST['txtPhoneNumber']) . "')";

if ($mysqli->query($sqlInsert) === TRUE) {
    echo "New record inserted successfully.<br>";
} else {
    echo "Error: " . $sqlInsert . "<br>" . $mysqli->error;
}

// Retrieve data from the database
$sqlSelect = "SELECT * FROM test";
$result = $mysqli->query($sqlSelect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . ", Email: " . $row["email"] . ", Phone Number: " . $row["phone_number"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$mysqli->close();
?>
