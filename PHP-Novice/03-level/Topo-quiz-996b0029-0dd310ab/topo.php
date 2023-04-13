<?php

$score = '0';
$stad = array("Japan" => "Tokyo", "Mexico" => "Mexico-Stad", "USA" => "Washington D.C.", "India" => "New Delhi", "Zuid -Korea" => "Seoul", "China" => "Peking"
, "Nigeria" => "Abuja", "Argentinië" => "Buenos Aires", "Egypte" => "Cairo", "Engeland" => "Londen");

foreach ($stad as $iets => $val) {
    $hoofd = readline("Welke hoofdstad heeft $iets? ") ;{
    if ($hoofd == $val) {
            echo "correct!\n";
        ($score = $score + 1);
    } else {
        echo "Helaas, $hoofd is niet de hoofdstad van $iets\n het correcte antwoord is: $val \n";
    }
    }
}
echo "je hebt $score van de 10 goed geraden!"

?>