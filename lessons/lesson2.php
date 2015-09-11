<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Второй урок</title>
</head>
<body>


</body>
</html>


<?php
/*Полная форма условия
$a = 1;
 if($a > 0) {
 echo "Положительное";
}else {
echo "Отрицательное";

}
*/
?>


<?php 
/*Тернарный оператор
$a = 5;
$b = 7;

$max = $a > $b ? $a: $b;
echo $max;
*/
?>


<?php
/*Switch-case
$a = 'four';

switch(true) {
      case $a == 'one':
           echo 'Единица';
           break;
      case $a == 'two':
           echo 'Двойка';
           break;
      case $a == 'three':
           echo 'Тройка';
           break;
      default:
           echo "Неизвестное число";
           break;
              }
*/
?>

<?php
/*  Функции получения квадрата
function square($x)
{
 return $x*$x;
   
}
$b = square(4);
echo $b;

*/
/*Складывание чисел
function sum($a, $b)
{
 return $a +$b;
}
echo sum(17,19);*/

/*Нахождение самого максимального значения
function maxNumber($d, $f)
{
  if($d > $f)
    {
    return $d; 
    } else {
      return $f;
    }
}
echo maxNumber(3,4);
*/
?>

<?php
/*Заканчиваем предложение
function synth($str, $prep = '.')
{
return $str.$prep;

}
echo synth("Hello world");
*/

?>
<?php
/*Рекурсивная функция (Факториал)

function fact($x){
if($x<=2)
{
return $x;
}
else
 {
return $x * fact($x-1);
}
}
echo fact(20);

*/
?>


<?php
//Домашка #1
/*Вычисление чисел Фибоначчи
function fib($n)
{
   if ($n < 3)
     {
     return 1;
     }
   else{
     return fib($n-1)+ fib($n-2);
     }
}
echo fib(6);
*/


?>

<?php
//Домашка #2
//  вычисление процента
/*
function deposit($amount,$time, $year_procent )
{
$day_of_year = 365;

$year_profit = $amount * $year_procent / 100;
$month_profit = $year_profit * $time / $day_of_year;
return $month_profit;
}
echo deposit(5000, 90, 9);

*/
?>


<?php
/*
Напишите функцию, которая принимает на вход два
аргумента – число (1..31) и номер месяца (1..12).
Возвращает правильно сформированную дату на
русском языке. Например: «1 января» или «9 мая»

function full_date($number, $month){
        
switch(true) {
      case ($number < 31 && $month == 1):
           echo  $number ." ".  "Января";
           break;
      case ($number < 31 && $month == 2):
           echo  $number ."-".  "Февраля";
           break;
      case ($number < 31 && $month == 3):
           echo  $number ." ".  "Марта";
           break;
      case ($number < 31 && $month == 4):
           echo  $number ." ".  "Апреля";
           break;
      case ($number < 31 && $month == 5):
           echo  $number ." ".  "Мая";
           break;
      case ($number < 31 && $month == 6):
           echo  $number ." ".  "Июня";
           break;
      case ($number < 31 && $month == 7):
           echo  $number ." ".  "Июля";
           break;
      case ($number < 31 && $month == 8):
           echo  $number ." ".  "Августа";
           break;
      case ($number < 31 && $month == 9):
           echo  $number ." ".  "Сентября";
           break;
      case ($number < 31 && $month == 10):
           echo  $number ." ".  "Октября";
           break;
      case ($number < 31 && $month == 11):
           echo  $number ." ".  "Ноября";
           break;
      case ($number < 31 && $month == 12):
           echo  $number ." ".  "Декабря";
           break;
      default:
           echo "Дата введена неправильно";
           break;
              }

}
full_date(10, 12);

*/

?>
