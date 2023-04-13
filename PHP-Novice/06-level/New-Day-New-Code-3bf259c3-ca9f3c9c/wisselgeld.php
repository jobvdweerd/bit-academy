<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1]);

if (intval($argv[1]) <= 0) {
    echo ("geen wisselgeld"); 
} else {
    $test = floor($argv[1] / 50);
    $fifty = $test;
    $rest = $argv[1] - ($test * 50);
    $test = floor($rest / 20);
    $twenty = $test;
    $rest = $rest - ($test * 20);
    $test = floor($rest / 10); 
    $ten = $test;
    $rest = $rest - ($test * 10);
    $test = floor($rest / 5);
    $five = $test;
    $rest = $rest - ($test * 5);
    $test = floor($rest / 2);
    $two = $test ;
    $rest = $rest - ($test * 2);
    $test = floor($rest);
    $one = $test;

    echo "$fifty x 50 euro \n";
    echo "$twenty x 20 euro \n";
    echo "$ten x 10 euro \n";
    echo "$five x 5 euro \n";
    echo "$two x 2 euro \n";
    echo "$one x 1 euro \n";
}

?>