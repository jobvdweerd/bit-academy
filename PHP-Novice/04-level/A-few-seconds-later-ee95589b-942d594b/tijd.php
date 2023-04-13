<?php

$input = $argv;

if (substr($input[1], -1) == 'u') {
    $uren = (int)$input[1] * 3600;
    echo ($uren);
}
if (substr($input[1], -1) == 'd') {
    $dagen = (int)$input[1] * 24 * 60 * 60;
    echo ($dagen);
}
if (substr($input[1], -1) == 'm') {
    $minuten = (int)$input[1] * 60;
    echo ($minuten);
}
if (substr($input[1], -1) == 's') {
    echo (int)$input[1];
}

?>