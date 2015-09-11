<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/28/15
 * Time: 12:32 PM
 */

function Sql_connect()
{
    mysql_connect('127.0.0.1', 'fukuro', '12');
    mysql_select_db('test');
}
function Sql_exec($sql) {
     Sql_connect();
    mysql_query($sql);
}
function Sql_query($sql)
{
    Sql_connect();
    $res = mysql_query($sql);
    $ret = [];
    while(false !== $row=mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;

}

