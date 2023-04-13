<?php

$landen = array();
$land = readline("Hoeveel landen ga je toevoegen? "); {
    $j = $land;
for ($i = 0; $i < $j; $i++) {
    $welk = readline("welk land wil je toevoegen? ");
    $hoofd = readline("wat is de hoofdstad van $welk? ");
    $landen[$welk] = $hoofd;
}
}

foreach ($landen as $x => $t) {
    echo "$x, $t" . PHP_EOL;
}

?>