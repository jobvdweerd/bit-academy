<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Email: <input type="email" name="femail">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['femail'];
    if (empty($email)) {
        echo "Email is empty";
    } else {
        echo $email;
    }
}
?>

</body>
</html>