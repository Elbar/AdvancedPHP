
<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 11:33 PM
 */

/**
 * Regular expressions
*$str = 'Hello, world! You are fine!';

*preg_match_all('/hello,[\s]/i',$str, $m);//Табуляция в конце
*preg_match_all('/^hello/i',$str, $m);//Якорь начала
*preg_match_all('/hello$/i',$str, $m);//Якорь конца
*preg_match_all('/fine[.,!]$/i', $str, $m);
*preg_match_all('/word|world/i', $str, $m);
*preg_match_all('/worl?d/i', $str, $m);
*preg_match_all('/worl+d/i', $str, $m);
*preg_match_all('/\w, \w/i', $str, $m); // "o, w"
*preg_match_all('/\w+, \w+/i', $str, $m);//"Hello, world"


var_dump($m);

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
catch (E404Exception $e) {
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('404.php');
}


