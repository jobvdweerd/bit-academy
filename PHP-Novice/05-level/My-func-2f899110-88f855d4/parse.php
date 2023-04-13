<?php

function parseToInteger($value)
{
    if (intval($value) == 0) {
        echo("Input moet een valide getal zijn");
    } else {
        echo ($value);
    }
}

// Pas de code hieronder niet aan!

echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;
?>