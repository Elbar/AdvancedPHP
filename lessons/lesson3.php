<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

/*For loop
for($i = 0; $i<10; $i++)
{
echo $i;
}
*/
?>

<?php
/*Массивы
$a = [
  	  1 => 'red', 
          2=> 'blue', 
	 'green' =>3,
   	 'orange' => [1,2,3],
     ];

	$a['yellow'] = 7;

	var_dump($a['green']);
        echo $a[1];
*/
?>
<?php
/*Цикл foreach
 $a = [
	'red' => 123,
     	'green' => 17,
 	'blue' => 0,
	'alpha'=>[12, 34, 56],
];

	foreach($a as $key => $value)  {
	if(is_array($value)) {
	var_dump($value);
	}else {
	echo '"'. $key . '"='. $value;
	echo "\n";
	}
}
*/
?>

<?php
/*
$news = [
      1 => "News",
      2 => "Politics",
      3 => "Sport",
];

echo count($news);

*/

?>


<?php
 /*explode function
	$str = 'Москва, Cпб, Воронеж, Иваново';
	$a = explode(', ', $str);
	var_dump($a);
	

*/
?>
<?php
/*
	$str = ['Москва, Cпб, Воронеж, Иваново'];
		$a = implode(', ', $str);
		echo $a;

*/
?>

<?php
/*
$a = ['Москва', 'Cпб', 'Воронеж', 'Иваново'];

if( in_array('Москва', $a)) {
     echo "Есть!!!";} 
*/
?>


<?php
/*

	$arr =[1,4,7,5,3,7,43,234];
       $a = implode(',' , $arr);
        echo $a;
*/
?>

<?php
//Домашки
/*Home-1[Solved]
$a = 0;
while ($a<=100) {
$b=$a;
if ($b%3==0) echo $a." ";
$a++;
}
*/

?>

<?php

/*Home-2[Solved]

	function newArray($n) 
                   {
		$array = [];
	for($i = 0; $i <$n; $i++){
 		$array = mt_rand(1, $n);
                echo $array.'  ';
                     } 
                   }
newArray(20);

*/
      
?>



<?php
/*Home -3 [Solved]

 $a = [
	'Московская область' => ['Клин','Рутов'],
	'Ярославская область' => ['Ярославль','Рыбинск'],
];

   foreach($a as $key => $value){

     echo  "<br/>".$key."<br/>".$value[0] ."<br/>". $value[1]."<br/>" ;
   }
  */
?>

</body>
</html>
