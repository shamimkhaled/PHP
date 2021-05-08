<?php

// Print current date
    echo date('Y-m-d H:i:s'). '<br>';
// Print yesterday
    echo date('Y-m-d H:i:s', time() - (60 * 60 * 24)). '<br>';
// Different format: https://www.php.net/manual/en/function.date.php
    echo date('F j Y H:i:s'). '<br>';
// Print current timestamp
    echo time(). '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php
    $parseDate = date_parse('2021-05-08 4:00:00');
    echo '<pre>';
    var_dump($parseDate);
    echo '</pre>';
// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
    $dateString = "May 5 2021 5:01:00";
    $parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
    echo '<pre>';
    var_dump($parseDate);
    echo '</pre>';