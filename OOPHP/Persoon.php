<?php
    class Persoon
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemiddeldeCijfer;

        // constructor methode
        function __construct(string $naam, int $leeftijd,
        string $geslacht)
        {
            $this->naam = $naam;
            $this->leeftijd = $leeftijd;
            $this->geslacht = $geslacht;
            echo "\n Nieuw Persoon-object aangemaakt";
            echo "\n De Property naam is " . $this->naam;
        }
        function __destruct()
        {
            echo "\n Persoon object $this->naam wordt verwijderd";
        }
        function setGeslacht(string $geslacht)
        {
            $this->geslacht = $geslacht;
        }
        function getGeslacht()
        {
            return $this->geslacht;
        }
        function setNaam(string $naam)
        {
            $this->naam = $naam;
        }
        function getNaam()
        {
            return $this->naam;
        }
        function setLeeftijd(string $leeftijd)
        {
            $this->leeftijd = $leeftijd;
        }
        function getLeeftijd()
        {
            return $this->leeftijd;
        }
        function getGegevens()
        {
            $gegevens =
                "\nDe gegevens van " . $this->naam . " zijn: " .
                "\nLeeftijd: " . $this->leeftijd .
                "\nGeslacht: " . $this->geslacht;
            return $gegevens;
        }

        function toString()
        {
            return("\nDe gegevens van " . $this->naam . " zijn: " .
            "\nLeeftijd: " . $this->leeftijd .
            "\nGeslacht: " . $this->geslacht);
        }

        public function gegevensOpslaan()
        {
            $array = [];
            $array[0] = $this->getNaam();
            $array[1] = $this->getLeeftijd();
            $array[2] = $this->getGeslacht();
            return $array;

        }
    }
