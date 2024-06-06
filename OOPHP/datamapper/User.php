<?php
namespace datamapper {
    class User
    {
        protected $id;
        protected $voornaam;
        protected $achternaam;
        protected $leeftijd;
        protected $isStudenten;
        // constructor
        public function __construct(
            int $id,
            string $voornaam,
            string $achternaam,
            int $leeftijd,
            bool $isStudenten
        ) {
            $this->id = $id;
            $this->voornaam = $voornaam;
            $this->achternaam = $achternaam;
            $this->leeftijd = $leeftijd;
            $this->isStudenten = $isStudenten;
        }
    }
}
