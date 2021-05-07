
<?php
	define("PI", 3.1416);

	#Arithmatic operator: +,-,*,/
	#Modulus: %
	$num1 = 99.99;
	$num2 = 33.33;

	echo "Number1: ", $num1."<br>Number2: ", $num2;

	echo "<br>Addtion: ", ($num1 + $num2);
	echo "<br>Subtraction: ", ($num1 - $num2);
	echo "<br>Division: ", ($num1 / $num2);
	echo "<br>Multiplication: ", ($num1 * $num2);
	echo "<br>Remainder: ", ($num1 % $num2);


	#How to find a power of any number
	$base = 2;
	$exp = 5;

	#pow(base, exponential) is a mathmatical function of php for find power of any number.
	echo "<br> 2^5 = ", pow($base, $exp);
	echo "<br>5^2 = ", (5**2);

	#Find a Area of circle
	$radius = 3;
	$area = PI * ($radius*$radius);
	echo "<br>Area of the circle: ", $area;
?>

	