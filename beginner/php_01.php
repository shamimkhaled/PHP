<?php
	
	//print or display the message
	echo "Hello World!";

	//declare a variable with $ sign
	#var_dump is a function with return a value and return a data type.
	$name = "Shamim";
	echo "<br>Name: ",var_dump($name);
	#String concatation
	$name = $name." Khaled";
	echo "<br>Name is : ", $name;

	$num1 = 25;
	$num2 = 33.33;
	echo "<br>Number1 = ", var_dump($num1);
	echo "<br>Number2 = ", var_dump($num2);
	$sum = $num1 + $num2;
	echo "<br>Summation of two number: ", $sum;

	$x = true;
	echo "<br>Boolean: ", var_dump($x);

	#Arrayy data type can assign a multiple value.
	$arr = array("HTML5", "CSS3", "JavaScript", "PHP");
	echo "<br> ",var_dump($arr);



?>