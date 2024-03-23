<?php
	include("myfunctions.inc");
	$taxAllowance = 10000; // Example tax allowance value
    html_header("My second function demo");
    echo "I pay " . calculatetax(15000, 40, $taxAllowance) . " tax"; // Pass tax allowance
    html_footer();
?>

