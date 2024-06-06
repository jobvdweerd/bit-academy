<?php
class User extends Persoon
{
    private $e_mail;
    private $wachtwoord;
    private $rol;
    //__construct is een child-constructor
    function __construct(
        $persoonsnaam,
        $leeftijd,
        $geslacht,
        $e_mail,
        $wachtwoord,
        $rol
    ) {
        parent::__construct(
            $persoonsnaam,
            $leeftijd,
            $geslacht
        );
        $this->e_mail = $e_mail;
        $this->wachtwoord = $wachtwoord;
        $this->rol = $rol;
        echo "\nNieuwe User $persoonsnaam extends Persoon";
    }
    public function getGegevens()
    {
        $gegevens = parent::getGegevens();
        $gegevens .= "\nE_mail: $this->e_mail";
        $gegevens .= "\nWachtwoord:$this->>wacthwoord";
        $gegevens .= "\nRol:$this->>rol";
        return $gegevens;
    }
}