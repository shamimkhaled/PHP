<?php

	$day = "friday";

	#if-else statement
	if($day == "friday"){
		echo "Today is holiday!<br>";
	}else{
		echo "Today is not holiday!<br>";
	}	
 
	#check to even or odd number
	$num = 44;
	if($num % 2 == 0){
		echo "$num is even number";
	}else{
		echo "$num is odd number";
	}
	echo "<br>";
	#Find largest number
	$num1 = 22;
	$num2 = 33;
	$num3 = 11;
	#nested if-else statement
	if($num1 >= $num2 && $num1 >= $num3){
		echo "$num1 is the largest number";
	}
	else if($num2 >= $num1 && $num2 >= $num3){
		echo "$num2 is the largest number";
	}
	else if($num3 >= $num1 && $num3 >= $num2){
		echo "$num3 is the largest number";
	}
	else{
		echo "Number are equal";
	}
	echo "<br>";
	#Switch case statement
	$num = 100;
	switch ($num) {
		case 10:
			echo "Number is equal to 10";
			break;
		case 50:
			echo "Number is equal to 50";
			break;
		case 100:
			echo "Number is equal to 100";
			break;
		
		default:
			echo "Number is not equal to 10, 50 or 100";
			break;
	}
?>