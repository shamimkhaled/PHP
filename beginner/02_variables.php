<?php

// What is a variable

// Variable types

    /*
     * Integer
     * Float or Double
     * String
     * Array
     * Boolean
     * Null
     * Resource
     * Object
     */

// Declare variables
    $name = 'Shamim Khaled'; #string
    $age = 22; #integer data type
    $height = 1.65; #float data type
    $isMale = true; # boolean data type and true convert into string 1 and false convert into empty string
    $salary = null; #null data type and null convert into empty string

// Print the variables. Explain what is concatenation
    # . is use for string concatenation
    echo $name. '<br>';
    echo $age. '<br>';
    echo $height. '<br>';
    echo $isMale. '<br>';
    echo $salary. '<br>';


// Print types of the variables
    #gettype() is a variable data type checked function
    echo gettype($name). '<br>';
    echo gettype($age). '<br>';
    echo gettype($height). '<br>';
    echo gettype($isMale). '<br>';
    echo gettype($salary). '<br>';

// Print the whole variable
    #var_dump() is return data type with length and value and working large variable like array, object
    var_dump($name, $age, $height, $isMale, $salary);

// Change the value of the variable

    $name = false;

// Print type of the variable

    echo '<br>' .gettype($name);

// Variable checking functions

    is_string($name); #false
    is_int($age); # true
    is_double($height); #true
    is_bool($isMale); #true
    is_null($salary); #true

// Check if variable is defined
    #isset is a fuction check whether variable is set/declare or not declare and return true or false
    isset($name); #true
    isset($number); #false

// Constants

    define('PI', 3.1416);
    echo '<br>' .PI;
// Using PHP built-in constants

    echo '<br>' .SORT_ASC; #which correspond to number and used for sort into ascending order
    echo '<br>' .PHP_INT_MAX; # print the maximum number of integer having in PHP
