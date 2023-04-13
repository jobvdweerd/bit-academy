<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05]);
define("CENTEN", 100);

if (count($argv) != 2) {
    exit("geen wisselgeld");
} else {
    $geld = round(floatval($argv[1]) * CENTEN / 5) * 5;
    $rest = $geld;
    if ($rest == 0) {
        exit("geen wisselgeld");
    } else {
        foreach (MONEY_UNITS as $coin) {
            $coin *= CENTEN;
            if ($rest >= $coin) {
                $var = floor($rest / $coin);
                $rest = $rest % $coin;
                if ($coin >= CENTEN) {
                    echo  "$var x " . ($coin / CENTEN) . " euro" . PHP_EOL;
                } else {
                    echo "$var x " . $coin . " cent" . PHP_EOL;
                }
            }
        }
    }
}
function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is : $sum";
}
 
 addFunction(10, 20);

function printMe($param = null)
{
    print $param;
}
 
 printMe("This is test");
 printMe();

function Me($test = null)
{
    print $test;
}
 
 Me("This is test");
 Me();

?>