<?php
include "Item. php" ;
include "MyShoppingcart. php";
$item1 = new Item("1", "Toshiba", "Satellite", 999.99, 10);
$item2 = new Item("2", "Acer", "Aspire", 1099.99, 5);
$myShoppingcart = new MyShoppingcart();
$myShoppingcart->addToCart($item1);
$myShoppingcart->addToCart($item2);
$myShoppingcart->printCart();