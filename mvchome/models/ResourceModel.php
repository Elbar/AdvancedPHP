<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/8/15
 * Time: 2:16 PM
 */
require_once __DIR__ .'/../classes/AbsModel.php';
class ResourceModel
extends AbsModel
{
    public $id;
    public $deptId;
    public $name;
    public $description;
    protected static $table = 'news';

}