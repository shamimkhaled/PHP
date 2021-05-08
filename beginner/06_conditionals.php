<?php

$age = 20;
$salary = 300000;

// Sample if
    if($age === 20){
        echo 'Adult'. '<br>';
    }
// Without circle braces
    if($age === 20)
        echo 'Adult'. '<br>';
// Sample if-else
    if($salary > 300000){
        echo '1'. '<br>';
    }else{
        echo '2'. '<br>';
    }
// Difference between == and ===
    # [age==20] - true : if age is equal to 20 then execute otherwise not
    # [age==='20'] - false : if age is equal to 20 and also check to data type is equal the execute otherwise not
    if($age == 20){
        echo 'Adult'. '<br>';
    }

    if($age === '20'){
        echo 'Adult'. '<br>';
    }
// if AND
    if($age == 20 && $salary === 300000){
        echo 'Do something!'. '<br>';
    }
// if OR
    if($age == 20 || $salary === 300000){
        echo 'Do something!'. '<br>';
    }
// Ternary if
    echo $age < 20 ? 'Children' : 'Adult';
// Short ternary
    $newAge = $age ?: 18;
    echo '<br>' .$newAge. '<br>';
// Null coalescing operator
    # that means if name exist take out the name or doesn't exist take out the Khaled
    # $myName = isset($name) ? $name : 'Khaled';
    $myName = $myName ?? 'Khaled';
// switch
    $userRole = 'admin';
    switch ($userRole){
        case 'admin':
            echo 'admin';
            break;
        case 'editor':
            echo 'editor';
            break;
        case 'user':
            echo 'user';
        default:
            echo 'Invalid role';
            break;
    }