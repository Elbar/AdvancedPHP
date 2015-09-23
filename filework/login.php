
<?php session_start();  ?>
<?php
require __DIR__ . '/functions.php';


function login($login) 
       {
      setcookie('auth', $login, time()+ 86400);
       }
/*
* ----
*/


if (empty($_POST['login'])  || empty($_POST['password'])) {
    $_SESSION['error'] = 'Пустой логин или пароль!';
    header('Location: form.php');
    exit;       

}
$login = $_POST['login'];
$password = $_POST['password'];

if(!checkLoginPassword($login, $password)) {
      $_SESSION['error'] = 'Неверный логин или пароль';
      header('Location: form.php');
      exit;
      }

login($login);
header('Location: index.php');
exit;

?>
