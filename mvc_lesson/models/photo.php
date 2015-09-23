

<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/28/15
 * Time: 11:58 AM
 */
require_once __DIR__ . '/../functions/sql.php';
function Photo_getAll()
{
    Sql_connect();
    $sql = 'SELECT * FROM images';
    return Sql_query($sql);


}

function Photo_insert($data) {
    $sql = "
    INSERT INTO images(title, path) VALUES ('" . $data['title'] ."','" . $data['image'] . "')";
    Sql_exec($sql);

}



