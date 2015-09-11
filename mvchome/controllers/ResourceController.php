<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/3/15
 * Time: 9:31 PM
 */
require_once __DIR__ . '/../models/ResourceModel.php';
//require_once __DIR__ . '/../classes/Show.php';
class ResourceController {

   public function actionAll(){
      $article = new ResourceModel();
       $article->name= 'fukuro';
       $article->description = 'Lorem ipsum dolor sit amet';
       $article->insert();



       /* echo 'actionAll';
        $items = Resource::getAll();
        $show = new Show();
        $show->assign('items', $items);
        $show->items = $items;
        $show->display('resource/all.php');

       include __DIR__.'/../views/resource/all.php';*/
   }
    public function  actionOne() {

      /*  $id = $_GET['id'];
        $item = ResourceModel::getOne($id);
        $show = new Show();
        $show->assign('item', $item);
        $show->display('resource/one.php');*/
       // include __DIR__. '/../views/resource/one.php';


    }

}

