<?php
use datamapper\UserMapper;

include "datamapper/UserMapper.php";

$userMapper = new UserMapper($pdo);

$objectUser = $userMapper->find(1);
if ($objectUser === null) {
    echo "kon geen user object maken";
}
echo "\nObject voor user met id: " . $objectUser->getId() .
    " en naamm: " . $objectUser->getVoornaam() . " aangemaakt";