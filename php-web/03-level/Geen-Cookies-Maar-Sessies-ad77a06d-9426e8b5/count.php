<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Aantal bezoeken: 
<?php 

  session_start();

$_SESSION['visit'] += 1;

if (isset($_SESSION['visit'])) {
    echo $_SESSION['visit'];
}

?>
</h1>
</body>
</html>