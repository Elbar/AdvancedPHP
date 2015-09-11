<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 6:22 PM
 */


class Table {
    protected $storage;

    public  function  putInStorage($value) {
        $this->storage = $value;


    }

    public function getFromStorage() {
        return $this->storage;
    }

}
$t = new Table();
$t->putInStorage('TEST');
echo $t->getFromStorage();
var_dump($t);