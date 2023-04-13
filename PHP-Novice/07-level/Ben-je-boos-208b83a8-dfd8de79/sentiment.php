<?php

$positieveWoorden = convertFileToArray("positive-words.txt");
$neutraleWoorden = convertFileToArray("neutral-words.txt");
$negatieveWoorden = convertFileToArray("negative-words.txt");
$lyrics = file_get_contents("lyrics.txt");
$lyrics = str_replace("\n", " ", $lyrics);
$lyrics = explode(" ", $lyrics);

function convertFileToArray($file)
{
    $array = file_get_contents($file);
    $array = explode("\n", $array);
    return $array;
}

$positieveWoorden;
$neutraleWoorden;
$negatieveWoorden;
$lyrics;

foreach ($lyrics as $words) {
    if (in_array($words, $positieveWoorden)) {
        $positieveTeller++;
    }
    if (in_array($words, $neutraleWoorden)) {
        $neutraleTeller++;
    }
    if (in_array($words, $negatieveWoorden)) {
        $negatieveTeller++;
    }
}
$sentiment = ($neutraleTeller + $positieveTeller - $negatieveTeller) / $neutraleTeller;
echo ("Positieve woorden: $positieveTeller" . PHP_EOL);
echo ("Neutrale woorden: $neutraleTeller" . PHP_EOL);
echo ("negatieve woorden: $negatieveTeller" . PHP_EOL);
echo ("Het sentiment van de tekst krijg een score van: $sentiment" . PHP_EOL);