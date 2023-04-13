<?php

$stapels = readline("Hoeveel stapels wil je hebben? ");
for ($i = 1; $i <= $stapels; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}

?>