<?php

use bibliotheek\Database;

require_once "biblioitheek/Database.php";
$mysql = Database::getInstance();
$pdo = $mysql->getPDO();

$mysql->maakDatabase($pdo);