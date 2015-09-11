

<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<h3>Галерея на PHP</h3>
<?php
 require __DIR__ .'/functions.php';

/*
assert(true == checkLoginPassword('pupkin', '123'));
assert(false == checkLoginPassword('pupkin111', '123'));
assert(false == checkLoginPassword('pupkin', '123456'));

*/



if(!isUser()) {
       header('Location: form.php');
        exit; 
 }

?>

 <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="filename">
 
      <input type="submit" value="Загрузить">
      </form>

</head>
<body>
</body>
</html>
<?php

//require __DIR__ .'/functions.php'


//$str = file_get_contents(__DIR__ . '/images');
//$read = readfile(__DIR__. '/images');
//var_dump($read);

//var_dump($str);

/*
file_put_contents(__DIR__ .'/test.txt' ,'Hello world');
$read = readfile($str);
var_dump($read);

*/
?>



<?php
//Получение списка файлов scandir()

$directory = 'uploads/';
$scandir = scandir($directory);
 for($i = 0; $i < count($scandir); $i++) { 
   

      if($scandir[$i] != '.' && $scandir[$i] != '..'){
           
         echo '<img src ="'. $directory . $scandir[$i]. '" alt="' .$scandir[$i]. '"/>'; 
  }

  } 


?>
<?php
mysql_connect('127.0.0.1', 'fukuro', '12');//Connect
 $res = mysql_select_db('test');//Choose database
//var_dump($res);


$res = mysql_query('SELECT * from people');
//var_dump($res);
while(false !== ($row = mysql_fetch_array($res))) {
       echo $row['id'];
       echo $row['name'];

       echo '<br>';
}

 




?>
 <a href="logout.php">Выход</a>


