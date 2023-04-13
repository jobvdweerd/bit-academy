<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Calculator</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="fnumber">Number 1</label><br>
    <input type="text" id="fnumber" name="fnumber" value=""><br>
    <label for="lnumber2">Number 2</label><br>
    <input type="text" id="lnumber2" name="lnumber2" value=""><br><br>
    <input type="submit" value="Add" name="sub">
    <input type="submit" value="Substract" name="sub">
    <input type="submit" value="Multiply" name="sub">
    <input type="submit" value="Divide" name="sub">
    <input type="submit" value="Modulo" name="sub">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['fnumber'];
    if (empty($number)) {
        echo "Number 1 is not a number";
    } else if (filter_var($number, FILTER_VALIDATE_FLOAT)) {      
    } else if (filter_var($number, FILTER_VALIDATE_INT) === 0 || !filter_var($number, FILTER_VALIDATE_INT) === true) {
        echo "Number 1 is not a number";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number2 = $_POST['lnumber2'];
    if ($number2 == 0) {
        echo ("Division by zero is not allowed!");
    } else if (filter_var($number2, FILTER_VALIDATE_FLOAT)) {
    } else if (empty($number2)) {
        echo "Number 2 is not a number";
    } else if (filter_var($number2, FILTER_VALIDATE_INT) === 0 || !filter_var($number2, FILTER_VALIDATE_INT) === true) {
        echo "Number 2 is not a number";
    }
}
switch ($_POST["sub"]) {
    case "Add":
        echo (int)$number + (int)$number2;
        break;
    case "Substract":
        echo (int)$number - (int)$number2;
        break;
    case "Multiply":
        echo (int)$number * (int)$number2;
        break;
    case "Divide":
        echo (int)$number / (int)$number2;
        break;
    case "Modulo":
        echo ($number) % ($number2);
        break;
    default:
        echo ("fout");
        break;
}
?>
</body>
</html>