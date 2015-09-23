<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/3/15
 * Time: 9:23 PM
 */

class Database {
    public function  __construct() {
        mysql_connect('127.0.0.1','fukuro','12');
        mysql_select_db('test');

    }
    public  function  queryAll($sql ,$class = 'stdClass') {
        $res = mysql_query($sql);
        if(false === $res) {
            return false;
        }
        $ret = [];
        while($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;

        }
        return $ret;

    }
    public  function queryOne($sql ,$class = 'stdClass') {
        return $this->queryAll($sql, $class)[0];

    }
    public  function  insertOne($sql, $class = 'stdClass'){
        $res = mysql_query($sql);
        return $res;
    }
}