
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
var_dump($_SERVER['REQUEST_URI']);
//var_dump($_GET);
//die;
require_once __DIR__.'/autoload.php';

/*$path =parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//$pathParts = explode('/', $path);
var_dump($path); */

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


/*$ctrl =!empty($pathParts[1]) ? $pathParts[1]  : 'News';
$act =!empty($pathParts[2]) ? $pathParts[2]  : 'All';
*/

//require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
try {
    $controllerClassName = $ctrl. 'Controller';
    $controller = new $controllerClassName;
    $method = 'action' . $act;
    $controller->$method();
}
catch (E404Exception $e) {
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('404.php');
    $log = new Log();
    $log->Write('test.txt', $e);
    $log->Read('test.txt');

}




