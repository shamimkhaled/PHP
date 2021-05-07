<?php

// Declaring numbers
    $x = 4;
    $y = 5;
    $z = 1.4;
// Arithmetic operations
    echo "($x + $y) * $z = ", ($x + $y) * $z. '<br>';
    echo "($x - $y) = ", ($x - $y) . '<br>';
    echo "($x * $y) = ", ($x * $y) . '<br>';
    echo "($x / $y) = ", ($x / $y) . '<br>';
    echo "($y % $x) = ", ($y % $x) . '<br>';
// Assignment with math operators
    $x += $y;
    echo $x. '<br'; // x = 9
    /*
    $x -= $y;
    echo $x. '<br'; // x = -1
    $x *= $y;
    echo $x. '<br'; // x = 20
    $x /= $y;
    echo $x. '<br'; // x = 0.8
    $y %= $x;
    echo $x. '<br'; // x = 1
    */
    echo '<br>';
// Increment operator
    echo '<br>'.$y++. '<br>';
    echo ++$y. '<br>';
// Decrement operator
    echo $x--. '<br>';
    echo --$x. '<br>';
// Number checking functions
    is_float(1.25); //true
    is_double(33.33); //true
    is_int(22); // true
    is_numeric("33.34"); //true
    is_numeric("33.g22"); //false
// Type Casting
    $strNumber = "12.11";
    $number = (float) $strNumber; //type casting or convert string to float
    var_dump($number);
// Number functions
    echo '<br>';

    echo "pow(2,5) = ". pow(2, 5). '<br>';
    echo "abs(-14) = ". abs(-14). '<br>';
    echo "sqrt(256) = ". sqrt(256). '<br>';
    echo "max(4,5) = ". max(4, 5). '<br>';
    echo "min(3,5) = ". min(3, 5). '<br>';
    echo "round(2.4) = ". round(2.4). '<br>';
    echo "round(2.6) = ". round(2.6). '<br>';
    echo "ceil(2.4) = ". ceil(2.4). '<br>'; // ceil mean up
    echo "floor(2.6) = ". floor(2.6). '<br>'; // floor mean down
// Formatting numbers
    $num1 = 234567891;
    // number format grouped with thousands
    echo number_format($num1, 2, ','). '<br>';
    $num2 = 34.456789;
    //specify a number after decimal point
    echo number_format($num2, 2). '<br>'; //34.46


#https://www.php.net/manual/en/ref.math.php