<?php
include "Bestand.php";
$bestand = new Bestand();
$bestand->schrijven();

try {
    $bestand->lezen();
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}