
<html>
<head>
<meta charset ="utf-8">
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
//Проверка на корректность загружаемого файла

if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }

   if(copy($_FILES["filename"]["tmp_name"],
     "./uploads".$_FILES["filename"]["name"]))
   {
     echo("Файл успешно загружен <br>
");
     echo("Характеристики файла:<br> 
");
     echo("Имя файла: ");
     echo($_FILES["filename"]["name"]);
     echo "<br>";
     echo("
Размер файла: ");
     echo($_FILES["filename"]["size"]);
     echo "<br>";
     echo("
Каталог для загрузки: ");
     echo($_FILES["filename"]["tmp_name"]);
     echo "<br>";
     echo("
Тип файла: ");
     echo($_FILES["filename"]["type"]);
     echo "<br>"; 
     echo "Через 5 секунд вы будете  перенаправлены..."; 
  header( 'Refresh: 5; url=index.php' );

   } else {
      echo("Ошибка загрузки файла");
   }

?>

</body>
</html>
 



