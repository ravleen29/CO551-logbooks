<?php

$mymarks['CO550'] = 60;
$mymarks['CO551'] = 60;
$mymarks['CO552'] = 70;
$mymarks['CO553'] = 60;
$mymarks['CO554'] = 70;
$mymarks['CO555'] = 70;

  

  $total = 0;
  foreach ($mymarks as $index => $value) {
      $total += $value;
  }
  
  $average = $total / 6;
  echo "The average grade is: " . $average;

  
 
  
?>


