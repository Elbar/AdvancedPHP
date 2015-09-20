<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/20/15
 * Time: 8:13 PM
 */
 function timeOfApp()
{
    $t = time();
    echo($t . "<br>");
    echo(date("Y-m-d", $t));
};
