<?php

function roundToFive($bedrag) 
{
    return round($bedrag / 5) * 5;  
} 
function geldBerekenen($restbedrag) 
{
    foreach (GELDEENHEDEN as $geldeenheid) {
        $waarde = $geldeenheid * 100;
        if ($restbedrag >= $waarde) {
            $aantaleuro = round($restbedrag / $waarde);
            $restbedrag = $restbedrag % $waarde;
            echo "$aantaleuro x $geldeenheid euro" . PHP_EOL ;
        }  
    }
    foreach (CENTEN as $cent) {
        $aantalcent = floor($restbedrag / $cent);
        $restbedrag = $restbedrag % $cent; 
        echo "$aantalcent x $cent cent" . PHP_EOL ;
    }  
}
 
function controle($bedrag) 
{
    if (empty($bedrag)) {
        throw new Exception("verkeerd aantal argumenten. roep de applicatie aan op de volgende manier: 'wisselgeld.php <bedrag>'");
    }
    if (!is_numeric($bedrag)) {
        throw new Exception("input moet een valide getal zijn");
    }
    if ($bedrag < 0) {
        throw new Exception("input moet een positief nummer zijn");
    }
}
 
$bedrag = $argv[1];
define("GELDEENHEDEN", [50, 20, 10, 5, 2, 1]);
define("CENTEN", [50, 20, 10, 5]);
$restbedrag = roundToFive($bedrag * 100);
try {
    controle($bedrag);
} catch (Exception $e) {
    echo "Error opgevangen: " . $e->getMessage();
    exit();
}
$bedrag = floatval($argv[1]);
geldBerekenen($restbedrag);




?>