<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    submissionForm();
} else {
    
    displayForm();
}

function submissionForm() {
    $db = mysqli_connect("localhost", "root", "", "logbook7");

    
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

  
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
       
    $sql = "INSERT INTO monster ";
    $sql .= "(name, image, audio) ";
    $sql .= "VALUES ('{$_POST['txtname']}', '$imagedata', '$audiodata')";

    $result = mysqli_query($db, $sql);

    mysqli_close($db);

   
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

function displayForm() {
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Monster Details</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Monster name :
 <input type="text" name="txtname" size="15" class="form-control" />
 </br></br>
 Monster image :
 <input  type="file" name="monsterimage" accept="image/jpeg" class="form-control" />
 </br></br>
 Monster Sound :
 <input  type="file" name="monsteraudio" accept="audio/basic" class="form-control"  />
 </br></br>
 <input type="submit" class="btn btn-default" value="Save" />
</form>
</body>
</html>
<?php
}
?>
