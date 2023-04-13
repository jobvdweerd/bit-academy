<?php

$array = array();
$hoeveel = readline("Hoeveel vrienden zal ik vragen om hun droom? \n");
$j = $hoeveel;
for ($i = 0; $i < $j; $i++) {
    $naam = readline("Wat is jouw naam? \n");
    $hdroom = readline("Hoeveel dromen ga je opgeven? \n");
    $h = $hdroom;
    for ($g = 0; $g < $h; $g++) {
        $droom = readline("wat is jouw droom? \n");
        $array[$naam] = $droom;
    }
}

foreach ($array as $x => $t) {
    echo "$x heeft dit als droom: $t" . PHP_EOL;
}

?>