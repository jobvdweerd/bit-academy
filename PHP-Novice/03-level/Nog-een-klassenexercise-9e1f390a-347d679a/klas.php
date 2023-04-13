<?php

$klas = readline("wie zit er in de klas? ");

$array = explode(" ", $klas);
foreach ($array as $tijd) {
    echo $tijd . "\n";
}

?>