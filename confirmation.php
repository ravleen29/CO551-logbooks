<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_COOKIE['selqty'])) {
    $quantity = $_COOKIE['selqty']; // Retrieve quantity from cookie
    $size = $_POST['selsize']; // Retrieve size from form submission

    // Calculate price based on size
    switch ($size) {
        case "Small":
            $price = 15.75;
            break;
        case "Medium":
            $price = 16.75;
            break;
        case "Large":
            $price = 17.75;
            break;
        case "ExtraLarge":
            $price = 18.75;
            break;
        default:
            $price = 0;
    }

    // Calculate total price
    $total_price = $quantity * $price;
} else {
    header("Location: shop.html"); // If selqty cookie is not set, redirect back to shop.html
    exit();
}
?>

<html>
<head>
  <title>Confirmation Page</title>
</head>
<body>
  <h2>Your order qty is <?php echo $quantity; ?></h2><br/>
  <h2>The selected size is <?php echo $size; ?></h2><br/>
  <h2>The total price is £<?php echo number_format($total_price, 2); ?></h2>
</body>
</html>
