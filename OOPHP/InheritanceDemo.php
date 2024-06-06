<?php
include "ParentClass.php";
include "ChildClass.php";
$petra = new ChildClass("Petra");
echo "\nPetra's geerfde achternaam: " . $petra->getAchternaam();