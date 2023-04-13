<html> 
    <head> 
        <title>Doucument</title> 
   </head> 
  <body> 
<?php 
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
?> 
je hebt deze pagina <?= $_COOKIE['count'] ?> keer bezocht 
   </body> 
</html>