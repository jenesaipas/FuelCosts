<!DOCTYPE html>
<!--	Author: Susan Nagy
		Date:	10/02/14
		File:	fuelCost.php
		Purpose: Chapter 5 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
	$pickOne = $_POST['workRelated'];
	$enterMiles = $_POST['enterMiles'];
//pickOne either gets chosen as Yes or No from the html form. Only if it's chosen as a yes  with the if statement will all the information get displayed. Otherwise the else displays $0 compensation.
	if ($pickOne == "Yes")
	{ 		$fuelCost = 0.35 * $enterMiles;
	
		echo "So with $enterMiles miles traveled, with fuel costing $0.35 a mile, your travels were work related.<br> You get $".number_format($fuelCost). " compensated back." ;
	}
	
	else 
	{	
		echo "Zero compensation for you.";
	}
	?>

</body>
</html>
