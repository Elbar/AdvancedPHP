<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/24/15
 * Time: 8:48 PM
 */
class DB
{


    protected $host;
    protected $user;
    protected $pass;
    public $db = 'test';

    public function  __construct($host, $user, $pass)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        mysql_connect($host, $user, $pass);

    }

    public function sql_connect()
    {

        mysql_select_db('test');
    }



    public function getNews(){

        $list = 'SELECT * FROM news';
        $get = mysql_query($list);
        $ret = [];
        while (false !== $row = mysql_fetch_assoc($get)) {
            $ret[] = $row;
        }
        var_dump($ret);
        return $ret;

    }
    public function insertNews() {
        $insert = "INSERT INTO news(title, text, author, date) VALUES ('Herbal','Lorem ipsum dolor sit amet','turbo','2015.08.20')";
        $new = mysql_query($insert);
        return $new;
    }
    public  function refreshNews() {
        header( 'Refresh: 5; url=index.php' );
    }


}