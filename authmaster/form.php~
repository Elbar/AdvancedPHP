<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php 

if(!empty($_SESSION['error']) ) {
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    }

?>


<form action="login.php" method="post">
Ваше имя:
<input type="text" name="login">
<br>
Ваш пароль :
<input type="password" name="password">
<input type="submit">
</form>
</body>
</html>
