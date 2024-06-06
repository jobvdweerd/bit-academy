<?php
class Item
{
    private $id;
    private $merk;
    private $model;
    private $prijs;
    private $aantal;
    function __construct($id, $merk, $model, $prijs, $aantal)
    {
        $this->id = $id;
        $this->merk = $merk;
        $this->model = $model;
        $this->prijs = $prijs;
        $this->aantal = $aantal;
    }
    function __destruct()
    {
        echo ("\nItem $this->id wordt verwijderd");
    }
}