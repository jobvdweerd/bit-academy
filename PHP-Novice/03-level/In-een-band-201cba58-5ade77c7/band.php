<?php

$array = array("Citizen of Glass kost €" => 4.5, "Night kost €" => 9, "New Eyes kost €" => 5, "Strange Trails kost €" => 10);

echo ("Het albumoverzicht:\n");
foreach ($array as $key => $value) {
    echo "$key $value\n";
}


$totaal = array_sum($array);
echo "Het totaalbedrag van alle albums is $totaal\n";

$gemiddelde = array_sum($array) / count($array);
echo "De Gemiddelde prijs van alle albums is €$gemiddelde\n";

?>