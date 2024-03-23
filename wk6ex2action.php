<?php	
$mysqli = new mysqli("localhost", "root", "", "db1_gwalke01");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form is submitted for updating or deleting
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnupdate'])) {
        // Update record
        $name = $_POST['txtname'];
        $telno = $_POST['txttelno'];
        $email = $_POST['txtemail'];

        // Prepare UPDATE statement
        $sqlUpdate = "UPDATE test SET email=?, phone_number=? WHERE name=?";
        $stmt = $mysqli->prepare($sqlUpdate);
        $stmt->bind_param("sss", $email, $telno, $name);

        // Execute UPDATE statement
        if ($stmt->execute()) {
            echo "Record updated successfully.<br>";
        } else {
            echo "Error updating record: " . $stmt->error . "<br>";
        }

        // Close statement
        $stmt->close();
    } elseif (isset($_POST['btndelete'])) {
        // Delete record
        $name = $_POST['txtname'];

        // Prepare DELETE statement
        $sqlDelete = "DELETE FROM test WHERE name=?";
        $stmt = $mysqli->prepare($sqlDelete);
        $stmt->bind_param("s", $name);

        // Execute DELETE statement
        if ($stmt->execute()) {
            echo "Record deleted successfully.<br>";
        } else {
            echo "Error deleting record: " . $stmt->error . "<br>";
        }

        // Close statement
        $stmt->close();
    }
}

// Execute sql statement to retrieve record details
$name = $_GET['id']; // Get the name from the URL parameter
$sql = "SELECT * FROM test WHERE name=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();

// Display form for updating or deleting record
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <html>
    <body>
    <form action="" method="post">
        Name:
        <input type="text" name="txtname" value="<?php echo $row["name"]; ?>" readonly /><br>
        Phone number:
        <input type="text" name="txttelno" value="<?php echo $row["phone_number"]; ?>" /><br>
        Email:
        <input type="text" name="txtemail" value="<?php echo $row["email"]; ?>" /><br>
        <input type="submit" name="btnupdate" value="Update" />
        <input type="submit" name="btndelete" value="Delete" onclick="return confirm('Are you sure you want to delete this record?')" />
    </form>
    </body>
    </html>
<?php
} else {
    echo "Record not found.";
}

// Close connection
$stmt->close();
$mysqli->close();
?>
