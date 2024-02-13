<?php
  $topmodules[0] = 'Open Source Systems ';
  $topmodules[1] = 'Programming 1';
  $topmodules[2] = 'Programming 2';
  $topmodules[3] = 'Web Application Development';
  $topmodules[4] = 'Software Engineering';
  
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align='center'>
<tr><th>Year</th><th>Marks</th></tr> 
<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  foreach ($mymarks as $index => $value)
  {
    echo "<tr><td>$index</td><td>$value</td></tr>";
  }
  
?>
</table>
<br> </br>
<table border=1 align='center'>
<tr><th>Index</th><th>Subject</th></tr> 
<?php
  for($count = 0;$count < 5;$count++)
  {
    echo "<tr><td>$count</td><td>$topmodules[$count]</td></tr>";
  }	
?>
</table>
</body>
</html>

