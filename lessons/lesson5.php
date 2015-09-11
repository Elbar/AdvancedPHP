<?php
/*

if isset($_COOKIE['user'])
          {
        $user = $_COOKIE['user'];
          }
*/

?>

<?php
/*Сколько раз пользователь посещал сайт
if (isset($_COOKIE['counter'])) {
      $counter = ++$_COOKIE['counter'];
    }else {
            $counter = 1;
      }
setcookie('counter', $counter, time()+ 86400);

?>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
Посещений :<?php echo $counter;?>


</body>

</html>

*/
?>
<?php

session_start();

//$_SESSION['login'] = 'vasya';

var_dump($_SESSION);


?>
