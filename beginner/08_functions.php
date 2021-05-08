<?php

// Function which prints "Hello I am Zura"
    function hello(){
        echo 'Hello, I am Shamim Khaled'. '<br>';
    }
    hello();
// Function with argument
    function Age($age){
        return "I am $age <br>";
    }
    echo Age('22'). '<br>';
// Create sum of two functions
    function summation($num1, $num2){
        return $num1 + $num2;
    }
    echo summation(4.25, 5). '<br>';
// Create function to sum all numbers using ...$numbers
    function sum(... $numbers){
        $sum = 0;
        foreach ($numbers as $number){
            $sum += $number;
        }
        return $sum;
    }
    echo sum(4, 5, 6, 9, 7). '<br>';
// Arrow functions
    function addition(... $nums){
        return array_reduce($nums, fn($carry, $n) => $carry + $n);
    }
    echo addition(1, 2, 3, 4, 5, 6);