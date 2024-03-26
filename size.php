<html>
<head>
  <title>Select Size Page</title>
</head>
<body>
  <form action="selectcolour.php" method="POST">
    Select the size for the <?php echo $_POST['selqty']; ?> widgets you are ordering
    <select name="selsize">
      <option value="Small">Small</option>
      <option value="Medium">Medium</option>
      <option value="Large">Large</option>
      <option value="ExtraLarge">Extra Large</option>
    </select>
    <br/><br/>  
    <input type="submit" value="Next"/>
  </form>
</body>
</html>
