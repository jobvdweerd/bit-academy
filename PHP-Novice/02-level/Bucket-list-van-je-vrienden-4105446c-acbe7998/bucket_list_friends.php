<?php

$bucket = [];
$vrienden = readline("Hoeveel vrienden zal ik vragen om hun droom?\n");
if (is_numeric($vrienden) == true) {
} else {
        echo ("$vrienden is geen geldig getal, probeer het opnieuw");
        exit;
}
for ($x = 1; $x <= $vrienden; $x++) {
    $items = readline("Wat is jouw naam?\n");
    $droom = readline("Wat is jouw droom?\n");
    $bucket[$items] = "$droom";
}
foreach ($bucket as $items => $droom) {
    echo $items . " heeft dit als droom: " . $droom;
    PHP_EOL;
}

?>