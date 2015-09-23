<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/4/15
 * Time: 6:28 PM
 */
/* Interface - руководство к действию */
interface IModel{
    public static function getAll();
    public static function getOne($id);
}