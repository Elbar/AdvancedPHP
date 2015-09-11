<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/3/15
 * Time: 10:27 PM
 */
require __DIR__ .'/../../controllers/AdminController.php';

$name = $_POST['name'];
$description = $_POST['description'];
if (empty($name) && empty($description)) {
    echo 'Поле пустое';

}else {
    echo 'Пользователь под именем' . ' '. $name . ' '.'добавлен';
}

header( 'Refresh: 5; url=../../index.php' );
?>


</body>
</html>