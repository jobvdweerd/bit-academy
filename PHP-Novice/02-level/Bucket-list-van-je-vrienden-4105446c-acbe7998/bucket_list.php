<?php

$y = 1;
$act = readline("Hoeveel activiteiten wil je toevogen?\n");
for ($x = 1; $x <= $act; $x++) {
    $items[$y] = readline("Wat wil je toevoegen aan jouw bucket list?\n");
    $y++;
}
echo ("Op jouw bucket list staat:\n");
for ($x = 1; $x <= $act; $x++) {
    echo $items[$x] . "/n";
}
?>