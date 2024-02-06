<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $tax = 0.22;

	$gross = $hourlyrate * $hoursperweek;


    $after_tax =  $gross * $tax; 
    $net_wage = $gross - $after_tax;
    
     echo "Gross: $" . $gross . "<br>";
     echo "Tax amount: $" . $after_tax . "<br>";
     echo "Net wage: $" . $net_wage . "<br>";
?>
</body>
</html>
