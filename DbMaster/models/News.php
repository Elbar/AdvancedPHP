<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 11:46 PM
 */
/*require_once __DIR__.'/../classes/DB.php';

class News
implements IModel
{
    public $id;
    public $title;
    public $text;

     public static  function getAll() {
        $db = new DB();
        return $db->queryAll('SELECT * FROM news' , 'News');
    }
    public static  function  getOne($id) {
        $db = new DB();
       return $db->queryOne('SELECT * FROM news where id='.$id, 'News');
    }
    /*class hinting
   //public function foo(IModel $model){
       }
}
   */
