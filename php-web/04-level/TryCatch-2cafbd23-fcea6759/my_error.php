<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php

function checkNum($number)
{
    if ($number > 10) {
        throw new Exception("Er is iets fout gegaan...");
    }
    return true;
}

try {
    checkNum(2);
    echo 'het klopt';
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
} 
?>
</body>
</html>