<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/3/15
 * Time: 11:06 PM
 */
class AdminController
{

    public function addOne() {
        $name = $_POST['id'];
        $description = $_POST['description'];
        $item = Resource::addOne($name, $description);
        include __DIR__ . "/../views/admin/index.php";
    }



}