<?php

// while
    $counter = 0;
    while($counter < 10){
        echo $counter. '<br>';
        if($counter == 5){
            break;
        }
        $counter++;
    }


// do - while
    $count = 20;
    do{
        echo $count. '<br>';
        $count ++;
    }while($count < 25);
// for
    for ($i = 50; $i <= 55; $i++){
        echo $i. '<br>';
    }
// foreach
    $fruits = ['Apple', 'Banana', 'Orange'];
    foreach ($fruits as $i => $fruit){
        echo $i. $fruit. '<br>';
    }
// Iterate Over associative array.
    $person = [
    'Name' => 'Shamim',
    'Age' => 22,
    'Hobbies' => ['Cricket', 'Football', 'Video Games']
    ];
    foreach($person as $key => $value){
        if(is_array($value)){
            echo $key. ' : '. implode(",", $value). '<br>';
        }else{
            echo  $key. ' : '. $value. '<br>';
        }
    }
