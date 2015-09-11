
<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/28/15
 * Time: 12:06 PM
 */


require __DIR__ . '/models/photo.php';
$items  = Photo_getAll();


include __DIR__ .'/views/index.php'; ?>
