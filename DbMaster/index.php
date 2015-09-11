
<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 11:33 PM
 */
require_once __DIR__.'/autoload.php';


    $ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
    $act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl. 'Controller';
//require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
try {

    $controller = new $controllerClassName;

    $method = 'action' . $act;
    $controller->$method();
}
catch (Exception $e){
    $view = new View();
    //$view->error =$e->getMessage();
    $view->display('404.php');

//header('Location: 404.php');

//    die('Something went wrong:' . $e->getMessage());


}