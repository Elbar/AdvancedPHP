<?php
$host = '127.0.0.1';
$user = 'fukuro';
$pass = '12';



mysql_connect($host, $user, $pass);
$db = mysql_select_db('test');
var_dump($db);
$query = mysql_query('SELECT * from people');
var_dump($query);

while(false !==($row = mysql_fetch_array($query))) {
    echo '<br>';
    echo $row['name'];

}

