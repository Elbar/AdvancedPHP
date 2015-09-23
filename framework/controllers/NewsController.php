<?php

/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 8/31/15
 * Time: 1:08 PM
 */
//use Application\Models\News as NewsModel;

//require_once __DIR__.'/../classes/AbstractModel.php';
require_once __DIR__ .'/../classes/Logger.php';
class NewsController
{

    public function actionAll() {
        /* $art = NewsModel::findOneByColumn('title', 'Today in the world ');
        $art->title = 'New heading';
        $art->update(); */
       /* $art->insert();
        $art->update();

       var_dump($art->id); */
/*
        $article =News::findall();
        $article->title = 'lorem';
        $article->text = 'Hello, World';

       // $article->insert();
        $article->getAll();
        var_dump($article);

//        var_dump(isset($article->title));

        // var_dump(NewsModel::findOneByPk(3));
        /*
        $db = new DB();
          $res = $db->query('SELECT * FROM news where id =:id',
              [':id' => 2]
          );
          var_dump($res);
          die;

        */

        echo 'actionAll';
        $items = News::findAll();
        echo json_encode($items);
        die;
       $view = new View();
       $view->items = $items;
        $view->display('news/all.php');
        $view->display('contact_us.php');
        echo count($view);
        die;


        //  include __DIR__. '/../views/news/all.php';

    }

    public  function  actionOne() {
       // echo 'actionOne';
        $id = $_GET['id'];
        $item= News::getOne($id);
       // echo json_encode($item);
       //die;
        //var_dump($item);
            $view = new View();
            $view->item = $item;
            /*$view->assign('item', $item);
            $view->render('news/one.php');*/
            $view->display('news/one.php');

    }


        //include __DIR__. '/../views/news/one.php';



}