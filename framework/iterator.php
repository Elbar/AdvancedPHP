<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/6/15
 * Time: 11:47 AM
 */

// Сннтаксис создания массива, введённый в PHP 5.4
$arr = [
    "sitepoint",
    "phpmaster",
    "buildmobile",
    "rubysource",
    "designfestival",
    "cloudspring"
];

// Создаём новый итератор ArrayIterator на основе массива
$iter = new RecursiveArrayIterator($arr);
$obj = new ArrayObject($arr);

foreach($iter as $key => $value) {
    echo $key . ":  " . $value . "<br>";
}
echo "Iterating over: " . $obj->count() . " values\n";
