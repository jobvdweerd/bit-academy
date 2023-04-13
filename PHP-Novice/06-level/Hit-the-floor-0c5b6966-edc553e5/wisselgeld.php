<?php

if (intval($argv[1]) <= 0) {
    echo ("geen wisselgeld"); 
} else {
    $test = floor($argv[1] / 10); 
    $ten = $test;
    $rest = $argv[1] - ($test * 10);
    $test = floor($rest / 5);
    $five = $test;
    $rest = $rest - ($test * 5);
    $test = floor($rest / 2);
    $two = $test ;
    $rest = $rest - ($test * 2);
    $test = floor($rest);
    $one = $test;

    echo "$ten x 10 euro \n";
    echo "$five x 5 euro \n";
    echo "$two x 2 euro \n";
    echo "$one x 1 euro \n";
}

?>