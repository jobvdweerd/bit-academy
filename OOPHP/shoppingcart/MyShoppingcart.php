<?php
include "Shoppingcart.php" ;
class MyShoppingcart extends Shoppingcart
{
    public function printCart()
    {
        // print alle items in shoppingcart
        echo sprintf(
    "%-10s %-20s %10s %6s\n",
    "Product",
            "Omschrijving",
            "Prijs",
            "Aantal"
            );
            foreach ($this->shoppingcart as $item) {
                echo sprintf(
            "%-10s %-20s %10.2f %6d\n",
                $item->getid(),
                $item->getOmschrijving(),
                $item->getPrijs(),
            $item->getAantal()
            );
        }
    }
}