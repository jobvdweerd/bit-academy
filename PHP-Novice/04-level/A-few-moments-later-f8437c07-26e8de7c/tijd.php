<?php

$input = $argv;
$seconds = 0;

$r = count($input);
if ($r == 1) {
    echo ("geen tijd meegegeven");
} else {
    for ($x = 1; $x < $r; $x++) {
        switch (substr($input[$x], -1)) {
            case 'u':
                $tijd = (int)$input[$x] * 3600;
                break;
            case "d":
                $tijd = (int)$input[$x] * 24 * 60 * 60;
                break;    
            case "m":
                $tijd = (int)$input[$x] * 60;
                break;
            case "s":
                $tijd = (int)$input[$x];
                break;
            default:
                $tijd = 0;
        }
        $seconds += $tijd;
    }
    echo ("De totale tijd is $seconds seconden");
}
?>