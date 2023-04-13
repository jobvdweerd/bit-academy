<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    echo "<table cellspacing=0 width=400px";
    echo "<tr>";

for ($x = 0; $x <= 8; $x++) {
    for ($z = 1; $z <= $x; $z++) {
        echo "<td height=50px width=50px bgcolor=black></td>";
    }
    echo "\n";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>