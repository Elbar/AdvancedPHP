
<?php
if(isset($_COOKIE['counter'])) {
       $counter = ++ $_COOKIE['counter'];
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

