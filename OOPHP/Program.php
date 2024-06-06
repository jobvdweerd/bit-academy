<?php
include 'Persoon.php';
$demirel = new Persoon("Demirel", 18, "m");
$thamara = new Persoon("Thamara", 19, "v");
$ton = new Persoon("Ton", 16, "m");
$demirel->setLeeftijd(24);
echo "\n De leeftijd van Demirel is: " . $demirel->getLeeftijd();
echo "\n" . gettype((Object) $thamara->getLeeftijd());
echo "\n" . gettype((Object) $thamara->getGeslacht());
echo $demirel->toString();
$gegevensTon = $ton->gegevensOpslaan();
print_r($gegevensTon);