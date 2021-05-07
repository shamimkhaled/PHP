<?php

// Create simple string
    $name = "Shamim Khaled";
    $str1 = 'Hello, I am $name';
    $str2 = "Hello, I am $name";
    echo $str1. '<br>';
    echo $str2. '<br>';
// String concatenation
    echo $str2. ' and I am 22'. '<br>';
// String functions
    $string = "    Hello World!   ";
    echo "1 - ". strlen($string). '<br>'; // length of string
    echo "2 - ". trim($string). '<br>'; // remove a whitespace from beginning to ending
    echo "3 - ". ltrim($string). '<br>'; // remove a left-side whitespace
    echo "4 - ". rtrim($string). '<br>'; // remove a right-side whitespace
    echo "5 - ". str_word_count($string). '<br>'; // count word of string
    echo "6 - ". strrev($string). '<br>'; // reverse a string
    echo "7 - ". strtoupper($string). '<br>'; // uppercase of string
    echo "8 - ". strtolower($string). '<br>'; // lowercase of string
    echo "9 - ". ucfirst('hello'). '<br>'; // only uppercase first word of string
    echo "10 - ". lcfirst('HELLO'). '<br>'; // only lowercase first wod of string
    echo "11 - ". substr($string, 7). '<br>'; // print the string from position 7

// Multiline text and line breaks
    $longText = "Hello, I am Khaled
        I am 22,
        I love my Father";
    echo '<br>'. $longText. '<br>';
    echo '<br>'. nl2br($longText). '<br>'; // breaks before all newlines
// Multiline text and reserve html tags
    $longText = "Hello, I am <strong>Khaled</strong>
        I am <strong>22</strong>,
        I love my <strong>Father</strong>";
    echo "<br>1 - ". nl2br($longText). '<br>';
    echo "2 - ". htmlentities($longText). '<br>';

    
// https://www.php.net/manual/en/ref.strings.php