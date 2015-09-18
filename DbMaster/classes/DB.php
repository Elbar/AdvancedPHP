<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/30/15
 * Time: 11:31 PM
 */
class DB
{
    private $dbh;
    private $className = 'stdClass';

   public function __construct() {
/*
       mysql_connect('127.0.0.1','fukuro', '12');
       mysql_select_db('test');*/


       try {
           $this->dbh = new PDO('mysql:dbname=test; host=127.0.0.1', 'fukuro', '12');
       }
       catch(PDOException $e){
           $log = new Log();
           $log->Write('test.txt', $e);
           $log->Read('test.txt');
           header( 'Refresh: 1; url=./views/403.php' );

           die("Sorry.Couldn't connect with database!");
           }

   }
     public function setClassName($className) {
          $this->className = $className;
     }

    public function query($sql, $params=[]) {
        $sth = $this->dbh->prepare($sql);
         $sth->execute($params);
       return  $sth->fetchAll(PDO::FETCH_CLASS,$this->className);

    }

    /**
     * @param $sql
     * @param array $params
     * @return bool
     */
    public function execute($sql, $params=[]) {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);

    }


    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();

    }

/*

    public  function queryAll($sql, $class = 'stdClass') {
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

    public  function  queryOne($sql, $class='stdClass') {
        return $this->queryAll($sql, $class)[0];
    }

*/
}