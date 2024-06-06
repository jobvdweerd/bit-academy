<?php

use bibliotheek\Database;

require_once "bibliotheek/Database.php";

$mysql = Database::getInstance();
$pdo = $mysql->getPDO();
$mysql->selecteerUsers();

$objectUser->setVoornaam("Hamza");
$userMapper->updateDatabase($objectUser);

$mysql->selecteerUsers($pdo);