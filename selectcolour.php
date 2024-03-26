<?php
if (!isset($_COOKIE['selqty'])) {
    header("Location: shop.html"); // If selqty cookie is not set, redirect back to shop.html
    exit();
}
?>

<html>
<head>
  <title>Select Colour Page</title>
</head>
<body>
  <form action='confirmation.php'  method='POST'>
    Select the colour for the <?php echo $_COOKIE['selqty']; ?> widgets you are ordering
    <select name='selcolour'>
      <option value="white">white</option>
      <option value="red">red</option>
      <option value="yellow">yellow</option>
      <option value="green">green</option>
      <option value="blue">blue</option>
    </select>
    <br/><br/>  
    <input type='cookie' name="selsize" value="<?php echo $_POST['selsize']; ?>">
    <input type='submit' value='Buy'/>
  </form>
</body>
</html>
