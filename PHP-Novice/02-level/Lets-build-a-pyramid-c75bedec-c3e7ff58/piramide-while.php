<?php

$stapels = readline("Hoeveel stapels wil je hebben? ");
$x = 1;
while ($x <= $stapels) {
    $y = 1;
    while ($y <= $x) {
        echo"*  ";
        $y++;      
    }
    echo PHP_EOL;
    $x++;
}

?>