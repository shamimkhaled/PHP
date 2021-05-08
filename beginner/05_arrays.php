<?php

// Create array
    $fruits = ['Banana', 'Apple', 'Orange'];
// Print the whole array
    var_dump($fruits);
    # <pre></pre> tag defined a pre-formatted text
    echo '<br>'. '<pre>';
    var_dump($fruits);
    echo '</pre>'.'<br>';
// Get element by index
    echo $fruits[1]. '<br>';
// Set element by index
    $fruits[0] = 'Strawberry';
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// Check if array has element at index
    isset($fruits[2]); // true
    isset($fruits[3]); // false
// Append element
    $fruits[] = 'Banana';
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// Print the length of the array
    echo count($fruits). '<br>';
// Add element at the end of the array
    array_push($fruits, 'foo');
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

// Remove element from the end of the array
    echo array_pop($fruits);
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// Add element at the beginning of the array
    array_unshift($fruits, 'Mango');
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// Remove element from the beginning of the array
    echo array_shift($fruits);
// Split the string into an array
    $string = "Banana, Litchi, Orange";
    echo '<pre>';
    var_dump(explode(',', $string)); // explode() breaks a string into array
    echo '</pre>';
// Combine array elements into string
    echo implode(", ", $fruits). '<br>'; // implode() breaks a array into string
// Check if element exist in the array
    echo '<pre>';
    var_dump(in_array('Apple', $fruits)); // true
    echo '</pre>';
// Search element index in the array
    echo '<pre>';
    var_dump(array_search('Apple', $fruits)); // print the index number of existing element otherwise return false
    echo '</pre>';
// Merge two arrays
    $vegetables = ['Potato', 'Carrot', 'Cucumber'];
    echo '<pre>';
    var_dump(array_merge($fruits, $vegetables)); // merge the two array into one array
    var_dump(...$vegetables, ...$fruits); //merge array
    echo '</pre>';
// Sorting of array (Reverse order also)
    sort($fruits); // sort into alphabetically order
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
    //Reverse order
    rsort($fruits);
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
    $person = [
        'Name' => 'Shamim',
        'Age' => 22,
        'Hobbies' => ['Cricket', 'Football', 'Video Games']
    ];
    echo 'Associative Array'. '<pre>';
    var_dump($person);
    echo '</pre>';
// Get element by key
    echo $person['Name']. '<br>';

// Set element by key
    $person['Channel'] = "Spike Growth";
    echo '<pre>';
    var_dump($person);
    echo '</pre>';
// Null coalescing assignment operator. Since PHP 7.4
// Check if array has specific key
    # if address is doesn't exist in person array return address value unknown
    #if(!isset($person['Address'])){
    #   $person['Address'] = 'unknown';
    #}
    # ?? mean check the address value set or not set
    $person['Address'] ??= 'unknown';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

// Print the keys of the array
    echo '<pre>';
    var_dump(array_keys($person));
    echo '</pre>';
// Print the values of the array
    echo '<pre>';
    var_dump(array_values($person));
    echo '</pre>';
// Sorting associative arrays by values, by keys
    ksort($person); # sort by key
    echo '<pre>';
    var_dump($person);
    echo '</pre>';
    # sort by value
    asort($person);
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

// Two dimensional arrays
    $todos = [
        ['title' => 'Todo title 1', 'Completed' => true],
        ['title' => 'Todo title 2', 'Completed' => false]
    ];

    echo '<pre>';
    var_dump($todos);
    echo '</pre>';