<!DOCTYPE html>


<html>
<head>

</head>

<body>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 6:58 PM
*/
require_once __DIR__ .'/classes/DB.php';
$d = new Db('127.0.0.1', 'fukuro', '12');
$d->sql_connect();
$d->insertNews();
$d->getNews();
//$d->refreshNews();



