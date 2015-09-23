<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/2/15
 * Time: 10:03 PM
 */
require_once __DIR__. '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl']: 'Resource';
$act = isset($_GET['act']) ? $_GET['act']: 'All';


$controllerClassName = $ctrl .'Controller';
require_once __DIR__ .'/controllers/' . $controllerClassName .'.php';


$controller = new $controllerClassName;
$method = 'action'. $act;
$controller->$method();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="/../test/mvchome/views/admin/admin.html">Добавить пользователя</a>
</body>
</html>
