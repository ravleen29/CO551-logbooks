<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selqty'])) {
    $selqty = $_POST['selqty']; // Store quantity in a variable

    // Set the cookie for selqty
    setcookie('selqty', $selqty, time() + (86400 * 30), "/"); // 86400 = 1 day

    header("Location: selectcolour.php"); // Redirect to selectcolour.php
    exit();
} else {
    header("Location: shop.html"); // If selqty is not set, redirect back to shop.html
    exit();
}
?>
