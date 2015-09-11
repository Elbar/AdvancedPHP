
<?php
/*
$news = [
	
 1 => [
	'title' => 'ЧП!',
  	'text' => 'Проезжая станцию, у меня слетела шляпа!'],
	
 2 => [
	'title' => 'Все умирают!',
	'text' => 'Падеж поголовья верблюдов - 100%',
           ]
	];

$id = (int)$_GET['id'];//В целях безопасности
$article = $news[$id];

?>
<h1>
<?php echo $article['title'];?>
</h1>
<p>
<?php echo $article['text'];
*/
?>

<?php
/*
if(isset($_POST['login'])) {
echo $_POST['login'];
}
*/
?>

<?php
/* 
isset - использование
$a = ['titl' => 'foo', 'tet' => 'bar'];

?>
<?php
if(isset($a['title'])) {
 echo "Есть заголовок";
}else {
 echo "Нет заголовка";}

*/
?>
<?php 
/*Home -4 [Solved]
$operations = ['*','/','+','-'];

if(isset($_POST['firstvalue']) && isset($_POST['secondvalue']))  {
     if(in_array($_POST['op'], $operations)) {
    

$number1 = (float)$_POST['firstvalue'];
$number2 = (float)$_POST['secondvalue'];
  
switch($_POST['op']) {
        case '*':
            $res = $number1 * $number2;
            break;
        case '/':
            $res = $number1 / $number2;
	    break;
        case '+':
            $res = $number1 + $number2;
            break;
        case '-':
            $res = $number1 - $number2;
	    break;
                  }
}
      
}else {
 $res = 'Ошибка операции';
}



?>

<html>
<head>
<meta charset='utf-8'>
</head>
<body>


<form action="lesson4.php" method="post">
     Калькулятор:
   	<input type="number" name="firstvalue" value="" />

     <select name="op">
    	<?php foreach ($operations as $op): ?>
  <option value="<?php echo $op; ?>"><?php echo $op; ?></option>
	<?php endforeach; ?>
     </select>

 	<input type="number" name="secondvalue" value="" />
	  
 	<input type="submit" value="=" />
        <?php if(isset($res)): ?>
		<p>Результат: <?php  echo $res; ?></p>
	<?php endif ?>
</form>



</body>
</html>
*/
